<?php

namespace App\Http\Controllers;

use App\Facades\PostFilter;
use App\Repositories\AssignmentRepository;
use App\Repositories\DepartmentRepository;
use App\Repositories\FacultyRepository;
use App\Repositories\LectureRepository;
use App\Repositories\MemberRepository;
use App\Repositories\NoteRepository;
use App\Repositories\StudentRepository;
use App\Repositories\SubjectRepository;
use App\Repositories\TopicRepository;
use App\Repositories\UniversityRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class GenericController extends Controller
{

    protected $studentRepository;

    protected $facultyRepository;

    protected $universityRepository;

    protected $lectureRepository;

    protected $subjectRepository;

    protected $noteRepo;

    protected $topicRepository;

    protected $memberRepository;

    protected $assignmentRepository;

    protected $departmentRepository;

    /**
     * GenericController constructor.
     * @param StudentRepository $studentRepository
     * @param FacultyRepository $facultyRepository
     * @param UniversityRepository $universityRepository
     * @param LectureRepository $lectureRepository
     * @param SubjectRepository $subjectRepository
     * @param NoteRepository $noteRepository
     * @param TopicRepository $topicRepository
     * @param MemberRepository $memberRepository
     * @param AssignmentRepository $assignmentRepository
     * @param DepartmentRepository $departmentRepository
     */
    public function __construct(
        StudentRepository $studentRepository,
        FacultyRepository $facultyRepository,
        UniversityRepository $universityRepository,
        LectureRepository $lectureRepository,
        SubjectRepository $subjectRepository,
        NoteRepository $noteRepository,
        TopicRepository $topicRepository,
        MemberRepository $memberRepository,
        AssignmentRepository $assignmentRepository,
        DepartmentRepository $departmentRepository)
    {
        $this->middleware(['auth'], ['except' => ['index']]);
        $this->studentRepository = $studentRepository;
        $this->facultyRepository = $facultyRepository;
        $this->universityRepository = $universityRepository;
        $this->lectureRepository = $lectureRepository;
        $this->subjectRepository = $subjectRepository;
        $this->noteRepo = $noteRepository;
        $this->topicRepository = $topicRepository;
        $this->assignmentRepository = $assignmentRepository;
        $this->memberRepository = $memberRepository;
        $this->departmentRepository = $departmentRepository;
    }


    public function index()
    {
        if (auth()->guard('student')->check()) {
            return $this->studentFeed();
        }
        if (auth()->guard('faculty')->check()) {
            return $this->facultyFeed();
        }
        if (auth()->guard('university')->check()) {
            return $this->universityFeed();
        }

        $departments = $this->departmentRepository->getAll();
        return view('index', compact('departments'));
    }

    public function studentFeed()
    {
        $member = $this->getUser();
        return view('layouts.feed', compact('member'));
    }

    public function facultyFeed()
    {
        return view('layouts.feed');
    }

    public function universityFeed()
    {
        $member = user();
        return view('layouts.university.index', compact('member'));
    }

    public function getSubjects()
    {
        $subjects = $this->subjectRepository->getStudentSubjects();
        return view('layouts.subjects', compact('subjects', 'lectures'));
    }

    public function getSubject(Request $request)
    {
        $member = user();
        $data = $request->only('subject', 'faculty');
        $faculty = $this->facultyRepository->getById($data['faculty']);
        $subject = $this->subjectRepository->getById($data['subject']);
        $assignments = $subject->assignment->where('subject_id', $subject->id)->where('faculty_id', $faculty->id);
        $students = $this->subjectRepository->getSubjectStudents($data['subject']);
        $reports = collect([$member->attendance->where('subject_id', $subject->id), $member->result->where('subject_id', $subject->id)])->collapse()->flatten();
        $lectures = $subject->lectures->where('faculty_id', $faculty->id);
        $updates = PostFilter::subjectUpdate($faculty, $subject->id);
        return view('layouts.subject', compact('updates', 'faculty', 'subject', 'students', 'reports', 'lectures', 'assignments'));
    }

    public function getSubjectLecture(Request $request)
    {
        $member = user();
        $data = $request->only('subject', 'faculty', 'lecture');
        $faculty = $this->facultyRepository->getById($data['faculty']);
        $subject = $this->subjectRepository->getById($data['subject']);
        $assignments = $subject->assignment->where('subject_id', $subject->id)->where('faculty_id', $faculty->id);
        $students = $this->subjectRepository->getSubjectStudents($data['subject']);
        $reports = collect([$member->attendance->where('subject_id', $subject->id), $member->result->where('subject_id', $subject->id)])->collapse()->flatten();
        $lectures = $subject->lectures->where('faculty_id', $faculty->id);
        $lecture = $this->lectureRepository->getById($data['lecture']);
        $updates = PostFilter::subjectUpdate($faculty, $subject->id);
        return view('layouts.subject_lecture', compact('updates', 'faculty', 'subject', 'students', 'reports', 'lectures', 'lecture', 'assignments'));

    }

    public function getStudentProfile($id = null)
    {
        $member = $this->studentRepository->getById($id);
        $updates = PostFilter::studentUpdates($member);
        $libraries = PostFilter::studentLibraries($member);
        return view('layouts.profile', compact('updates', 'libraries', 'member'));
    }
    
    public function getUniversity($id = null)
    {
        if (is_university()) {
            return $this->getUniversityPageForAdmin();
        }

        return $this->getUniversityPage($id);
    }

    public function getFollowingUniversities()
    {
        return view('layouts.following_universities');
    }

    private function getUniversityPage($id)
    {
        $university = university();
        if ($id != null) {
            $university = $this->universityRepository->getById($id);
        }
        $updates = PostFilter::universityUpdate($university);

        return view('layouts.university', compact('updates', 'university'));
    }

    private function getUniversityPageForAdmin()
    {
        $member = $this->getUser();
        $department = $member->university->department;
        $updates = PostFilter::universityUpdate(university());
        $libraries = PostFilter::universityLibraries(university());

        return view('layouts.university.profile', compact('updates', 'libraries', 'department', 'member', 'students'));
    }

    public function getTopics()
    {
        return view('layouts.topics');
    }

    public function getMyTopics()
    {
        return view('layouts.me.topics');
    }

    public function getProject()
    {
        return view('layouts.projects');
    }

    public function getMyProjects()
    {
        return view('layouts.me.projects');
    }

    private function getUser()
    {
        if (is_student()) {
            $user = auth()->guard('student')->user();
            $user->setFollower();
            return $user;
        }
        if (is_faculty()) {
            $user = auth()->guard('faculty')->user();
            $user->setFollower();
            return $user;
        }

        $user = auth()->guard('university')->user();
        $user->setFollower();
        return $user;
    }

    public function upload()
    {
        $file = Input::file('file');
        $input = array('image' => $file);
        $rules = array(
            'image' => 'image'
        );
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return Response::json(array('success' => false, 'errors' => $validator->getMessageBag()->toArray()));
        }

        $fileName = time() . '-' . $file->getClientOriginalName();
        $destination = public_path() . '/uploads/';
        $file->move($destination, $fileName);

        echo url('/uploads/' . $fileName);
    }

}
