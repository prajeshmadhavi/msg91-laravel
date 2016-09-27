<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Department;
use App\Models\Subject;
use App\Models\University;
use App\Models\UniversityAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Laracasts\Flash\Flash;
use App\Repositories\AssignmentRepository;
use App\Repositories\FacultyRepository;
use App\Repositories\MemberRepository;
use App\Repositories\NoteRepository;
use App\Repositories\StudentRepository;
use App\Repositories\SubjectRepository;
use App\Repositories\TopicRepository;
use App\Repositories\UniversityRepository;
use App\Repositories\LectureRepository;


class AdminController extends Controller
{

    protected $studentRepository;

    protected $facultyRepository;

    protected $universityRepository;

    protected $lectureRepository;

    protected $subjectRepository;

    protected  $noteRepo;

    protected $topicRepository;

    protected $memberRepository;

    protected $assignmentRepository;

    public function __construct(StudentRepository $studentRepository,
                                FacultyRepository $facultyRepository,
                                UniversityRepository $universityRepository,
                                LectureRepository $lectureRepository,
                                SubjectRepository $subjectRepository,
                                NoteRepository $noteRepository,
                                TopicRepository $topicRepository,
                                MemberRepository $memberRepository,
                                AssignmentRepository $assignmentRepository)

    {
        $this->middleware('super_admin');
        $this->studentRepository = $studentRepository;
        $this->facultyRepository = $facultyRepository;
        $this->universityRepository = $universityRepository;
        $this->lectureRepository = $lectureRepository;
        $this->subjectRepository = $subjectRepository;
        $this->noteRepo = $noteRepository;
        $this->topicRepository = $topicRepository;
        $this->assignmentRepository = $assignmentRepository;
        $this->memberRepository = $memberRepository;
    }

    public function index()
    {
        $subject = Subject::orderBy('id', 'asc')->get();
        $department = Department::orderBy('id', 'asc')->get();
        $university = University::orderBy('id', 'asc')->get();

        return view('admin.index', compact('subject', 'department', 'university'));
    }

    public function getUniversities()
    {
        $university = University::all()->except(['additional_comment', 'updated_at']);
        return $university;
    }

    public function postDepartment(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|unique:departments'
        ]);

        $data = $request->all();
        
        if ($request->has('subject')) 
        {
            if (!Subject::where('name', $data['subject'])->get()->first()) {

                $subject = Subject::create(['name' => $data['subject']]);
                $department = Department::create(['name' => $data['name']]);
                $department->subject()->save($subject);

                Flash::message('Department & Subject Created!');
                return redirect()->back();
            } else if ($subject = Subject::where('name', $data['subject'])->get()->first()) {

                $department = Department::create(['name' => $data['name']]);
                $department->subject()->save($subject);

                Flash::message('Department & Subject Created!');
                return redirect()->back();
            }
        }

        Department::create(['name' => $data['name']]);

        Flash::message(' Department Created !');
        return redirect()->back();
    }

    public function addSubject(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $data = $request->all();
        $subject = Subject::where('name', $data['name'])->first();

        if ($subject && !$request->has('department')) {
            Flash::message('Subject Already Exists !');
            return redirect()->back();
        }else if($subject && $request->has('department')){

            $department = Department::where('name', $data['department'])->first();
            $subject->department()->save($department);
            Flash::message(' Subject Created !');
            return redirect()->back();
        }


        if ($request->has('department')) {

            $department = Department::where('name', $data['department'])->get()->first();
            $subject = Subject::create(['name' => $data['name']]);
            $subject->department()->save($department);

            Flash::message(' Subject Created !');
            return redirect()->back();
        }

        Subject::create(['name' => $data['name']]);

        Flash::message('Subject Created !');
        return redirect()->back();
    }

    public function createUniversity(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:university_admins|unique:universities',
            'address' => 'required',
            'phone' => 'required',
            'department' => 'required',
        ]);

        $this->createNewUniversity($request);
        
        Flash::message('University Created !');
        return redirect()->back();
    }

    public function verifyUniversity($id)
    {
        $university = $this->universityRepository->getById($id);
        $university->update(['is_verified' => true]);
        try{
            $this->createUniversityAdmin(['name' => $university->name, 'email' => $university->email], $id);
        }catch (\Exception $e)
        {
            return $university;
        }
        return $university;
    }

    protected function createNewUniversity($request)
    {
        $data = $request->all();
        $password = str_random(20);
        $data['password'] = bcrypt($password);

        $university = University::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'address' => $data['address'],
        ]);

        $university_admin = UniversityAdmin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'university_id' => $university->id
        ]);

        $university->department()->attach(array_map("arr_to_int", $data['department']));
//        $university->department()->subjects()->create([
//
//        ]);

        //Send University Email
        sendMail($university_admin->email, "mails.college_created", "Welcome to Social University", [$university_admin->name, $university_admin->email, $password]);

        return $university;
    }

    public function updateUniversity(Request $request)
    {
        if ($request->has('id') && University::find($request->get('id'))) {

            $university = $this->updateNewUniversity($request);

        } else {

            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email|unique:university_admins|unique:universities',
                'address' => 'required',
                'phone' => 'required',
                'department' => 'required',
            ]);

            $university = $this->createNewUniversity($request);
        }

        if ($request->ajax() || $request->wantsJson()) {

            return response()->json($university, 200);
        }

        Flash::message('University Created !');
        return redirect()->back();
    }

    protected function updateNewUniversity($request)
    {
        $data = $request->all();
        $university = University::find($data['id']);

        $university->update([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'address' => $data['address']
        ]);

        $request->has('department') ? $university->department()->sync(array_map("arr_to_int", $data['department'])) : null;

        if ($admin = UniversityAdmin::where(['email', $data['email']])->get()->first()) {
            $this->updateUniversityAdmin($data, $university, $admin->id);
        } else {
            $this->createUniversityAdmin($data, $university);
        }

        return $university;

    }

    protected function createUniversityAdmin($data, $id)
    {
        $password = str_random(20);
        $data['password'] = bcrypt($password);

        $admin = UniversityAdmin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'university_id' => $id
        ]);

        //Send University Email
        sendMail($admin->email, "mails.college_created", "Welcome to Social University", [$admin->name, $admin->email, $password]);
    }

    protected function updateUniversityAdmin($data, $university_id, $id)
    {
        $admin = UniversityAdmin::find($id)->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'university_id' => $university_id
        ]);


        return $admin;
    }

}
