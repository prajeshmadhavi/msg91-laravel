<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 08/06/16
 * Time: 12:53 PM
 */

namespace App\Repositories;


use App\Contracts\Crud;
use App\Events\OnAttendancePostedEvent;
use App\Events\OnReportPostedEvent;
use App\Models\Attendance;

class AttendanceRepository extends Crud
{

    protected $model;

    /**
     * AttendanceRepository constructor.
     * @param $model
     */
    public function __construct(Attendance $model)
    {
        $this->model = $model;
    }

    public function store($request)
    {
        $data = $request->all();
        $attendances = collect();
        foreach($data['student_id'] as  $key => $value)
        {

            $attendance =  $this->create([
                'period' => $data['period'],
                'total_class' => $data['total_class'],
                'subject_id' => $data['subject'],
                'class_attended' => $data['class_attended'][$key],
                'student_id' => $data['student_id'][$key],
                'faculty_id' => user()->id,
                'feedback_comment' => $request->has('feedback_comment') ? $data['feedback_comment'] : ''
            ]);
            $attendances->push($attendance);
            event(new OnReportPostedEvent($attendance));
        }
        return $attendances;
    }
    

}