<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 08/06/16
 * Time: 12:40 PM
 */

namespace App\Repositories;


use App\Contracts\Crud;
use App\Events\OnAssignmentPostedEvent;
use Illuminate\Http\Request;
use App\Models\Assignment;
use App\Models\Quiz;
use App\Models\Student;
use Illuminate\Support\Facades\Storage;

class AssignmentRepository extends Crud
{

    protected $model;

    protected $aws_path;

    /**
     * AssignmentRepository constructor.
     * @param $model
     */
    public function __construct(Assignment $model)
    {
        $this->model = $model;
        if (user()) {
            $this->aws_path = UPLOAD_URL . md5(user()->email);
        }
    }

    public function store($request)
    {
        if ($request->has('has_quiz')) {
            return $this->quizAssignment($request);
        }
        return $this->noteAssignment($request);
    }

    private function noteAssignment($request)
    {
        $data = $request->all();
        $data['has_file'] = $request->has('has_file') ? true : false;
        $data['subject_id'] = (int)$data['subject_id'];
        $data['faculty_id'] = user()->id;
        $assignment = $this->create($data);
        $this->attachStudents($assignment, $request->get('subject_id'));
        event(new OnAssignmentPostedEvent($assignment));
        return $assignment;
    }

    private function quizAssignment($request)
    {

        $data = $request->all();
        $data['subject_id'] = (int)$data['subject_id'];
        $data['faculty_id'] = user()->id;
        $assignment = $this->create($data);
        $this->attachStudents($assignment, $request->get('subject_id'));

        $nos_of_quest = $data['question_count'];

        for ($i = 1; $i <= $nos_of_quest; $i++) {

            $a_quiz = Quiz::create([
                'assignment_id' => $assignment->id,
                'question' => $data['questions_'][$i]
            ]);

            $a_quiz->options()->createMany([

                ['option' => $data['op_one_'][$i],
                    'is_correct' => $data['answer_one_q_'][$i]
                ],
                ['option' => $data['op_two_'][$i],
                    'is_correct' => $data['answer_two_q_'][$i]
                ],
                ['option' => $data['op_three_'][$i],
                    'is_correct' => $data['answer_three_q_'][$i]
                ],
                ['option' => isset($data['op_four_'][$i]) ? $data['op_four_'][$i] : '',
                    'is_correct' => isset($data['answer_four_q_'][$i]) ? $data['answer_four_q_'][$i] : ''
                ]
            ]);

        }
        event(new OnAssignmentPostedEvent($assignment));

        return $assignment;
    }

    protected function attachStudents($assignment, $subject)
    {
        $student = user()->student->where('pivot.subject_id', (int)$subject);
        $assignment->student()->attach($student);
    }
    
    public function getByFacultyAndSubject($subject, $faculty)
    {
        return $this->getAll([ 'subject_id' => $subject, 'faculty_id' => $faculty]);
    }

    public function getByStudent($subject, $faculty)
    {
        return $this->getAll([ 'subject_id' => $subject, 'faculty_id' => $faculty]);
    }

    public function uploadFile(Request $request)
    {
        Storage::makeDirectory(upload_path());
        $file_name = str_random(10) . '.'.$request->file('assignment_file')->getClientOriginalExtension();
        $file_path = upload_path() . '/' . $file_name;
        Storage::put($file_path, file_get_contents($request->file('assignment_file')));
        return $this->aws_path . '/' . $file_name;
    }

}