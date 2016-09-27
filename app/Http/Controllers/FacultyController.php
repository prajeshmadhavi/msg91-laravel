<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Response\HttpResponse;
use App\Models\Assignment;
use App\Models\Attendance;
use App\Models\Event;
use App\Models\Question;
use App\Models\QuestionTag;
use App\Models\EventTag;
use App\Models\Lectures;
use App\Models\Note;
use App\Models\Project;
use App\Models\Result;
use App\Models\Student;
use App\Repositories\AssignmentRepository;
use App\Repositories\AttendanceRepository;
use App\Repositories\ForumRepository;
use App\Repositories\LectureRepository;
use App\Repositories\ResultRepository;
use App\Repositories\TopicRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class FacultyController extends Controller
{
    protected $flash;

    protected $http;
    
    protected $lectureRepo;
    
    protected $attendanceRepo;
    
    protected $resultRepo;
    
    protected $assignmentRepo;

    protected $forumRepo;

    /**
     * FacultyController constructor.
     * @param HttpResponse $http
     * @param LectureRepository $lectureRepo
     * @param AttendanceRepository $attendanceRepo
     * @param ResultRepository $resultRepo
     * @param AssignmentRepository $assignmentRepo
     * @param ForumRepository $forumRepository
     */
    public function __construct(HttpResponse $http, LectureRepository $lectureRepo, AttendanceRepository $attendanceRepo, ResultRepository $resultRepo, AssignmentRepository $assignmentRepo
                                ,TopicRepository $forumRepository)
    {
        $this->middleware('faculty');
        $this->http = $http;
        $this->lectureRepo = $lectureRepo;
        $this->attendanceRepo = $attendanceRepo;
        $this->resultRepo = $resultRepo;
        $this->assignmentRepo = $assignmentRepo;
        $this->forumRepo = $forumRepository;
    }


    public function postQuestion(Request $request)
    {
        $this->validate($request, [

            'title' => 'required',
            'description' => 'required',
            'privacy' => 'required'
        ]);
        
        $question = $this->forumRepo->store($request);
        
        return $this->http->responds($request, $question);
    }


    public function postEvent(Request $request)
    {
        $faculty = $this->getUser();
        $data = $request->all();
        $event = Event::create([

            'title' => $data['event_title'],
            'location' => $data['event_location'],
            'event_days' => $data['event_days'],
            'starts' => $data['starts'],
            'ends' => $data['ends'],
            'poster_type' => 'faculty',
            'poster_id' => $faculty->id

        ]);

        if ($request->has('tags'))
            $this->saveEventTags($request->get('tags'), $event, $faculty);

        return redirect()->back();
    }

    public function postLecture(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'subject' => 'required'
        ]);

        $lecture = $this->lectureRepo->persist($request);
        //Flash::message('Lecture Posted !');
        return $this->http->responds($request, $lecture);
    }

    public function postAssignment(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'due_date' => 'required',
            'subject_id' => 'required',
        ]);
        
        $assignment = $this->assignmentRepo->store($request);
        return $this->http->responds($request, $assignment);
    }

    public function postResult(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'subject' => 'required',
            'pass_mark' => 'required',
            'total_mark' => 'required',
            'result_mark' => 'required|array',
            'student' => 'required|array',
        ]);

        $results = $this->resultRepo->store($request);
        return $this->http->responds($request, $results);
    }

    public function postAttendance(Request $request)
    {
        $this->validate($request, [
            'period' => 'required',
            'total_class' => 'required',
            'class_attended' => 'required',
            'subject' => 'required',
            'student_id' => 'required',
        ]);
        $attends = $this->attendanceRepo->store($request);
        return $this->http->responds($request, $attends);
    }
    
    public function getSubject()
    {
        $member = $this->getUser();
        $students = $member->student->unique();
        return view('layouts.faculty.subject', compact('member', 'students'));
    }

    public function getSubjectStudent($subject)
    {
        $faculty = user();
        $subjects = $faculty->subject->where('pivot.subject_id', (int)$subject)->first();
        $students = collect();
        if ($subjects && $subjects->student->count() > 0) {
            $students = $subjects->student->where('university_id', $faculty->university->id);
            $students = $students->all(['id', 'name', 'avatar']);
        }

        return response()->json($students, 200);
    }

    private function getUser()
    {
        return auth()->guard('faculty')->user();
    }
    
    private function saveEventTags($tagged_users, $event, $faculty)
    {
        $users = array_map("arr_to_int", [$tagged_users]);
        foreach ($users as $tagged) {
            EventTag::create([
                'tag_type' => 'event',
                'tagger_type' => 'faculty',
                'tagger_id' => $faculty->university->id,
                'taggee_id' => $tagged,
                'event_id' => $event->id
            ]);
        }

    }

}
