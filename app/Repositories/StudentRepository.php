<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 08/06/16
 * Time: 9:57 PM
 */

namespace App\Repositories;


use App\Contracts\Crud;
use App\Events\OnStudentInviteEvent;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class StudentRepository extends Crud
{

    protected $model;

    /**
     * StudentRepository constructor.
     * @param $model
     */

    public function __construct(Student $model)
    {
        $this->model = $model;
    }

    public function invite($request)
    {
        $university = user()->university;

        $data = $request->all();
        $password = str_random(20);
        session()->put('student_pwd', $password);
        $data['password'] = bcrypt($password);
        $data['university_id'] = $university->id;
        $data['registration_id'] = std_id($data['phone']);
        $student = $this->create($data);
        event(new OnStudentInviteEvent($student));
        Log::info(session()->get('student_pwd'));
        $this->saveStudentSubjects($student);
        return $student;
    }

    protected function saveStudentSubjects($student)
    {
        $uni_id = university()->id;
        $subjects = $student->department->subjects()->wherePivot('university_id', $uni_id)->get();

        foreach ($subjects as $subject) {

            DB::table('student_subject')->insert(

                    ['faculty_id' => $subject->faculty($uni_id)->id,
                    'department_id' => $student->department->id,
                    'subject_id' => $subject->id,
                    'student_id' => $student->id,
                    'university_id' => $student->university->id
                ]
            );
        }
    }


}