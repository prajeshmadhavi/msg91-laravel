<?php

namespace App\Http\Controllers;


use App\Facades\PostFilter;
use App\Repositories\CourseRepository;
use App\Repositories\DepartmentRepository;
use App\Repositories\EventRepository;
use App\Repositories\FacultyRepository;
use App\Repositories\LectureRepository;
use App\Repositories\MemberRepository;
use App\Repositories\NewsRepository;
use App\Repositories\NoteRepository;
use App\Repositories\NotificationRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\StudentRepository;
use App\Repositories\SubjectRepository;
use App\Repositories\TopicRepository;
use App\Repositories\UniversityRepository;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ApiController extends Controller
{



    protected $studentRepository;

    protected $facultyRepository;

    protected $universityRepository;

    protected $lectureRepository;

    protected $subjectRepository;

    protected $departmentRepo;

    protected $topicRepository;

    protected $noteRepository;

    protected $memberRepository;

    protected $projectRepository;

    protected $newsRepository;

    protected $eventRepository;

    protected $courseRepository;

    protected $notificationRepository;

    protected $directory;

    protected $aws_path;


    /**
     * ApiController constructor.
     * @param StudentRepository $studentRepository
     * @param FacultyRepository $facultyRepository
     * @param UniversityRepository $universityRepository
     * @param LectureRepository $lectureRepository
     * @param SubjectRepository $subjectRepository
     * @param DepartmentRepository $departmentRepository
     * @param TopicRepository $topicRepository
     * @param NoteRepository $noteRepository
     * @param MemberRepository $memberRepository
     * @param ProjectRepository $projectRepository
     * @param NewsRepository $newsRepository
     * @param EventRepository $eventRepository
     * @param CourseRepository $courseRepository
     * @param NotificationRepository $notificationRepository
     */
    public function __construct(StudentRepository $studentRepository, FacultyRepository $facultyRepository, UniversityRepository $universityRepository, LectureRepository $lectureRepository
        , SubjectRepository $subjectRepository, DepartmentRepository $departmentRepository, TopicRepository $topicRepository
        , NoteRepository $noteRepository, MemberRepository $memberRepository, ProjectRepository $projectRepository,
                                NewsRepository $newsRepository, EventRepository $eventRepository,
                                CourseRepository $courseRepository,
                                NotificationRepository $notificationRepository)
    {
        $this->middleware(['auth'], ['except' => ['no_auth']]);
        $this->studentRepository = $studentRepository;
        $this->facultyRepository = $facultyRepository;
        $this->universityRepository = $universityRepository;
        $this->lectureRepository = $lectureRepository;
        $this->subjectRepository = $subjectRepository;
        $this->departmentRepo = $departmentRepository;
        $this->topicRepository = $topicRepository;
        $this->noteRepository = $noteRepository;
        $this->memberRepository = $memberRepository;
        $this->projectRepository = $projectRepository;
        $this->newsRepository = $newsRepository;
        $this->eventRepository = $eventRepository;
        $this->courseRepository = $courseRepository;
        $this->notificationRepository = $notificationRepository;
    }

    public function no_auth()
    {

    }

    public function getTaggable()
    {
        return $this->memberRepository->getTaggable();
    }

    public function getSubjects()
    {
        if (is_student() || is_faculty()) {
            return user()->subjects;
        }
        return university()->subjects()->get();
    }

    public function getLecturesBySubject($subject)
    {
        $lecture = $this->lectureRepository->getAll([],['subject_id' => $subject]);
        $filtered = $lecture->where('faculty.university_id', university()->id);
        return $filtered;
    }

    public function getLectures($subject, $faculty)
    {
        return $this->lectureRepository->byFacultyAndSubject($faculty, $subject);
    }

    public function getLecturesById($id)
    {
        return $this->lectureRepository->getById($id);
    }

    public function getCourseDetails($course)
    {
        $course = $this->courseRepository->getById($course);
        return $course;
    }

    public function getSubjectStudent($subject)
    {
        $students = $this->subjectRepository->getSubjectStudents($subject);
        return response()->json($students, 200);
    }

    public function getDepartmentSubjects($department)
    {
        $department = $this->departmentRepo->getById($department);
        return $department->subjects()->wherePivot('university_id', university()->id)->get();
    }

    public function getUpdate($as = null, Request $request)
    {
        switch ($as) {
            case 'subject' :
                return PostFilter::subjectUpdate(null, (int)Input::get('subject'));
                break;
            case  'university' :

                $university = university();
                if($request->has('university')){
                    $university = $this->universityRepository->getById((int)$request->get('university'));
                }

                return PostFilter::universityUpdate($university);
                break;
            case  'student' :

                $user = user();
                if($request->has('student')){
                    $user = $this->studentRepository->getById((int)$request->get('student'));
                }
                return PostFilter::studentUpdates($user);
                break;
            default :
                return [];
        }
    }

    public function getPosts()
    {
        $notes = $this->noteRepository->withPrivacy();
        $projects = [];//$this->projectRepository->withPrivacy();
        $topics = $this->topicRepository->withPrivacy();
        $news = $this->newsRepository->withPrivacy();
        $events = $this->eventRepository->withPrivacy();
        $posts = collect([$notes, $projects, $topics, $news, $events]);
        return $posts->flatten();
    }

    public function getNotes()
    {
        $notes = collect();
        foreach ($this->noteRepository->getAll(['comments', 'likes']) as $note) {
            $notes->push(['note' => $note]);
        }
        return $notes;
    }

    public function getNoteById($id)
    {
        return $this->noteRepository->getById($id, ['comments', 'likes']);
    }

    public function getProjects()
    {
        $projects = collect();
        foreach ($this->projectRepository->getAll() as $project) {
            $projects->push(['project' => $project]);
        }
        return $projects;
    }

    public function getProjectById($id)
    {
        return $this->projectRepository->getById($id, ['comments', 'likes']);
    }

    public function getEvent()
    {
        $events = collect();
        foreach ($this->eventRepository->getAll() as $event) {
            $events->push(['event' => $event]);
        }
        return $events;
    }

    public function getEventById($id)
    {
        return $this->eventRepository->getById($id, ['comments', 'likes']);
    }

    public function getNews()
    {
        $news = collect();
        foreach ($this->newsRepository->getAll() as $newses) {
            $news->push(['newses' => $newses]);
        }
        return $news;
    }

    public function getNewsById($id)
    {
        return $this->newsRepository->getById($id);
    }

    public function getLibrary($as = null)
    {
        if ($as == 'university') {
            return PostFilter::universityLibraries(university()->id);
        }
        if ($as == 'student') {
            return PostFilter::studentLibraries();
        }
    }

    public function getTopics()
    {
        $questions = collect();
        foreach ($this->topicRepository->getAll(['answers', 'likes']) as $question) {
            $questions->push(['topic' => $question]);
        }
        return $questions;
    }

    public function getTopicById($id)
    {
        return $this->topicRepository->getById($id, ['answers', 'likes']);
    }

    public function getNotifications()
    {
        $notifications = $this->notificationRepository->getAll([], ['user_type' => getClass(user_type()), 'user_id' => user()->id, 'is_viewed' => false]);
        return $notifications;
    }

    public function getAcademicNotifications()
    {
        $attendance = user()->attendance;
        $result = user()->result;
        $assignment = is_faculty() ?  user()->assignments : user()->assignment;
        $academic = collect([$attendance, $result, $assignment]);
        return $academic->flatten();
    }

    public function markAsRead($uuid)
    {
        return $this->notificationRepository->update(['is_viewed' => true], $uuid);
    }

    public function getMyTopics()
    {
        return user()->topics;
    }

    public function getMyProjects()
    {
        return user()->projects;
    }

    function storeInsertFiles (Request $request) {

        Storage::makeDirectory(upload_path());
        $file = $request->file('note_additional_files');
        $raw = file_get_contents($file->getRealPath());
        $file_name = unique_file_name($file);
        $file_path = upload_path().'/'.$file_name;
        Storage::put($file_path, $raw);

        return $file_name;
    }




}
