<?php


namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Response\HttpResponse;
use App\Models\University;
use App\Models\Department;
use App\Models\Event;
use App\Models\UniversityAdmin;
use App\Repositories\AttendanceRepository;
use App\Repositories\CourseRepository;
use App\Repositories\DepartmentRepository;
use App\Repositories\FacultyRepository;
use App\Repositories\LectureRepository;
use App\Repositories\ResultRepository;
use App\Repositories\StudentRepository;
use App\Repositories\SubjectRepository;
use App\Repositories\UniversityAdminRepository;
use App\Repositories\UniversityRepository;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Laracasts\Flash\Flash;

class UniversityController extends Controller
{

    protected $http;

    protected $flash;

    protected $studentRepo;

    protected $facultyRepo;

    protected $adminRepo;

    protected $subjectRepo;

    protected $departmentRepo;

    protected $universityRepo;

    protected $courseRepo;

    protected $lectureRepo;

    protected $attendanceRepo;

    protected $resultRepo;

    /**
     * UniversityController constructor.
     * @param HttpResponse $http
     * @param Flash $flash
     * @param StudentRepository $studentRepo
     * @param FacultyRepository $facultyRepo
     * @param UniversityAdminRepository $adminRepo
     * @param SubjectRepository $subjectRepo
     * @param DepartmentRepository $departmentRepo
     * @param UniversityRepository $universityRepo
     * @param CourseRepository $courseRepository
     * @param LectureRepository $lectureRepository
     * @param AttendanceRepository $attendanceRepository
     * @param ResultRepository $resultRepository
     */
    public function __construct(HttpResponse $http, Flash $flash,
                                StudentRepository $studentRepo,
                                FacultyRepository $facultyRepo,
                                UniversityAdminRepository $adminRepo,
                                SubjectRepository $subjectRepo,
                                DepartmentRepository $departmentRepo,
                                UniversityRepository $universityRepo,
                                CourseRepository $courseRepository,
                                LectureRepository $lectureRepository,
                                AttendanceRepository $attendanceRepository,
                                ResultRepository $resultRepository)
    {
        $this->middleware(['university_admin'], ['except' => ['registerUniversity']]);
        $this->http = $http;
        $this->flash = $flash;
        $this->studentRepo = $studentRepo;
        $this->facultyRepo = $facultyRepo;
        $this->adminRepo = $adminRepo;
        $this->subjectRepo = $subjectRepo;
        $this->departmentRepo = $departmentRepo;
        $this->universityRepo = $universityRepo;
        $this->courseRepo = $courseRepository;
        $this->lectureRepo = $lectureRepository;
        $this->attendanceRepo = $attendanceRepository;
        $this->resultRepo = $resultRepository;
    }


    public function dashboard()
    {

    }

    public function registerUniversity(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:universities',
            'address' => 'required',
            'phone' => 'required',
            'alternate_phone' => 'required',
        ]);

        try {
            $university = University::create($request->only(['name', 'email', 'address', 'phone', 'alternate_phone', 'additional_comment']));
            if($request->has('departments'))
            {
                $university->department()->attach($request->get('departments'));
                $university->push();
            }

            $message = $university->name . ' has been registered on Social University. We will be in touch';
            //Todo Send Registration Email
            return response($message, 200);

        } catch (Exception $e) {

            return response()->json(['message', $e->getMessage()], 500);
        }
    }

    /**
     * Invite Student
     * @param Request $request
     * @return mixed
     */
    public function inviteStudent(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:students',
            'phone' => 'required|unique:students'
        ]);
        
        $this->studentRepo->invite($request);
        
       // Flash::message("Invitation Sent !");
        return redirect()->back();
    }

    /** Invite Faculty
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function inviteFaculty(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:faculties',
        ]);
        
        $faculty = $this->facultyRepo->invite($request);
        //Flash::message("Invitation Sent !");
        return $this->http->responds($request, $faculty);
    }

    /**
     * Invite University
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function inviteAdmin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:university_admins',
            'name' => 'required'
        ]);

        $university = $this->admin()->university;
        $admin = UniversityAdmin::persist($request, $university);
        return $this->http->responds($request, $admin);
    }

    /**
     * @param Request $request
     * @param $department
     */
    public function addSubjectToDepartment(Request $request, $department)
    {
        $subject = $request->only('subjects');
        $department = Department::where(['id' => $department])->first();
        $department = $department->subject()->attach(array_map("arr_to_int", $subject));
    }

    /**
     * @return mixed
     */
    public function universityProfile($profile_id)
    {
        $university = $this->universityRepo->getById($profile_id);
        $events = $this->getEvents();
        return view('layouts.university.profile', compact('university','events'));
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function postSubject(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'department' => 'required'
        ]);
        
       $request->has('public') ? $this->courseRepo->store($request) : $this->subjectRepo->store($request);

        Flash::message('Subject Created');
        return redirect()->back();
    }

    /**
     * Get All University Subject (Public & Private)
     * @return mixed
     * @return mixed
     */
    public function getSubjects()
    {
        $subjects = $this->subjectRepo->getAllUniversitySubjects();
        $courses = $this->courseRepo->getUniversityCourses();
        return view('layouts.university.subjects', compact('subjects', 'courses'));
    }


    public function getMembers()
    {
        return view('layouts.university.members');
    }

    /**
     * @return mixed
     */
    public function getSubjectDetails($id)
    {
        $subject = $this->subjectRepo->getById($id);
        $faculties = $subject->faculties->where('university_id', university()->id);
        $students = $subject->students()->wherePivot('university_id', university()->id)->get();
        return view('layouts.university.subject', compact('subject', 'faculties', 'students'));

    }

    public function getMemberDetails($department)
    {
        $department  = $this->departmentRepo->getById($department);
        $faculties = $department->faculty->where('university_id', university()->id);
        $students = $this->studentRepo->getAll(['department_id' => $department->id, 'university_id' => university()->id]);
        return view('layouts.university.member_details', compact('department', 'faculties', 'students'));
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getCourseDetails($id)
    {
        $course = $this->courseRepo->getById($id);
        return view('layouts.university.course', compact('course'));
    }


    public function postCourseLecture(Request $request)
    {
        $this->validate($request, [
            'title'=> 'required',
            'subject' => 'required',
            'video_url' => 'required',
            'brief_note' => 'required',
        ]);

        $this->courseRepo->storeLecture($request);
        //Flash::message('Lecture Created');
        return redirect()->back();
    }

    
    public function deleteCourse($id)
    {
        if($this->courseRepo->delete($id))
        {
            //Flash::message('Lecture Deleted');
            return redirect()->back();
        }
    }

    /**
     * @return mixed
     */
    public function getEvents()
    {
        $events = collect();
        foreach (Event::all() as $event) {
            $event->push([
                'event' => $event,
                'poster' => getEventPoster($event->poster_type, $event->poster_id),
                'tags' => $event->tags,
                'time_ago' => to_timeline($event->created_at)
            ]);
        }
        return $events;
    }

    private function admin()
    {
        return user();
    }

}
