<?php

namespace App\Http\Controllers;


use App\Facades\PostFilter;
use App\Http\Response\HttpResponse;
use App\Repositories\AssignmentRepository;
use App\Repositories\CourseRepository;
use App\Repositories\NoteRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\StudentRepository;
use App\Repositories\SubjectRepository;
use App\Repositories\TopicRepository;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    protected $response;

    protected $file;

    protected $noteRepo;

    protected $courseRepo;

    protected $subjectRepo;

    protected $forumRepository;

    protected $studentRepository;

    protected $projectRepository;

    protected $assignmentRepository;


    /**
     * StudentController constructor.
     * @param SubjectRepository $subjectRepository
     * @param CourseRepository $courseRepo
     * @param NoteRepository $noteRepo
     * @param HttpResponse $response
     * @param TopicRepository $forumRepository
     * @param StudentRepository $studentRepository
     * @param ProjectRepository $projectRepository
     * @param AssignmentRepository $assignmentRepository
     */

    public function __construct(SubjectRepository $subjectRepository, CourseRepository $courseRepo, NoteRepository $noteRepo, HttpResponse $response,
                                TopicRepository $forumRepository, StudentRepository $studentRepository, ProjectRepository $projectRepository, AssignmentRepository $assignmentRepository)
    {
        $this->middleware(['student'], ['except' => ['index']]);
        $this->response = $response;
        $this->noteRepo = $noteRepo;
        $this->courseRepo = $courseRepo;
        $this->subjectRepo = $subjectRepository;
        $this->forumRepository = $forumRepository;
        $this->studentRepository = $studentRepository;
        $this->projectRepository = $projectRepository;
        $this->assignmentRepository = $assignmentRepository;
    }

    public function profile($id = null)
    {
        $member = user();
        $updates = PostFilter::studentUpdates($member);
        $libraries = PostFilter::studentLibraries($member);
        return view('layouts.me.profile', compact('updates', 'libraries', 'member'));
    }

    public function getCourseDetails($id)
    {
        $course = $this->courseRepo->getById($id);
        return view('layouts.course', compact('course'));
    }

    public function enrollToCourse($course_id)
    {
        if ($this->courseRepo->enroll($course_id)) {
            return true;
        }
        return false;
    }

    public function isEnrolled($course_id)
    {
        return $this->courseRepo->isEnrolled($course_id);
    }

    public function attemptAssignment(Request $request)
    {

    }

    public function submitAssignmentFile(Request $request)
    {

        if ($request->hasFile('assignment_file')) {
            $file_name = $this->assignmentRepository->uploadFile($request);

            $assignment = user()->assignment->where('id', (int)$request->get('assignment_id'))->first();

            $assignment->pivot->pending = false;
            $assignment->pivot->completed = true;
            $assignment->pivot->note_file = $file_name;
            $assignment->pivot->save();
        }

        return redirect()->back();
    }


}
