<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Response\HttpResponse;
use App\Repositories\FacultyRepository;
use App\Repositories\NotificationRepository;
use App\Repositories\TopicRepository;
use App\Repositories\LectureRepository;
use App\Repositories\NoteRepository;
use App\Repositories\StudentRepository;
use App\Repositories\ProjectRepository;
use App\Repositories\SubjectRepository;
use App\Repositories\UniversityRepository;
use App\Repositories\NewsRepository;
use App\Repositories\EventRepository;
use Illuminate\Http\Request;

;


class PostController extends Controller
{
    protected $response;

    protected $studentRepository;

    protected $facultyRepository;

    protected $universityRepository;

    protected $lectureRepository;

    protected $subjectRepository;

    protected $noteRepo;

    protected $forumRepository;

    protected $projectRepository;

    protected $newsRepository;

    protected $eventRepository;

    protected $notificationRepository;

    /**
     * PostController constructor.
     * @param StudentRepository $studentRepository
     * @param FacultyRepository $facultyRepository
     * @param UniversityRepository $universityRepository
     * @param LectureRepository $lectureRepository
     * @param SubjectRepository $subjectRepository
     * @param NoteRepository $noteRepository
     * @param TopicRepository $forumRepository
     * @param ProjectRepository $projectRepository
     * @param NewsRepository $newsRepository
     * @param EventRepository $eventRepository
     * @param HttpResponse $response
     * @param NotificationRepository $notificationRepository
     */
    public function __construct(StudentRepository $studentRepository, FacultyRepository $facultyRepository, UniversityRepository $universityRepository, LectureRepository $lectureRepository
        , SubjectRepository $subjectRepository, NoteRepository $noteRepository, TopicRepository $forumRepository,ProjectRepository $projectRepository, NewsRepository $newsRepository, EventRepository $eventRepository, HttpResponse $response, NotificationRepository $notificationRepository)
    {
        $this->middleware(['auth'], ['except' => ['index']]);
        $this->studentRepository = $studentRepository;
        $this->facultyRepository = $facultyRepository;
        $this->universityRepository = $universityRepository;
        $this->lectureRepository = $lectureRepository;
        $this->subjectRepository = $subjectRepository;
        $this->noteRepo = $noteRepository;
        $this->newsRepository = $newsRepository;
        $this->forumRepository = $forumRepository;
        $this->projectRepository = $projectRepository;
        $this->eventRepository = $eventRepository;
        $this->response = $response;
        $this->notificationRepository = $notificationRepository;
    }


    public function postNote(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            //'preview_image' => 'required',
            'privacy' => 'required',
            //'subject_id' => 'required'
            //'lecture_id' => 'required'
        ]);

        $this->noteRepo->store($request);
    }

    public function postProject(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'preview_image' => 'required',
            'privacy' => 'required',

        ]);

        $this->projectRepository->store($request);
    }

    public function projectImageUpload(Request $request)
    {
        $this->projectRepository->storeProjectInsert($request);
    }

    public function newsImageUpload(Request $request)
    {
        $this->newsRepository->storeNewsInsert($request);
    }

    public function postNews(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'preview_image' => 'required',
            'privacy' => 'required',

        ]);

        $this->newsRepository->store($request);
    }

    public function postEvent(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'preview_image' => 'required',
            'privacy' => 'required',

        ]);

        $this->eventRepository->store($request);
    }

    public function postQuestion(Request $request)
    {
        $this->validate($request, [

            'title' => 'required',
            'description' => 'required',
            'privacy' => 'required'
        ]);

        $question = $this->forumRepository->store($request);

        return $this->response->responds($request, $question);
    }

    public function postQuestionAnswer(Request $request)
    {
        $answer = $this->forumRepository->answer($request);
        $this->notificationRepository->notify($answer, $answer->topic);
        return $answer;
    }

    public function markCorrectAnswer($best_answer, $topic)
    {
        return $this->forumRepository->markBestAnswer($best_answer, $topic);
    }





}



