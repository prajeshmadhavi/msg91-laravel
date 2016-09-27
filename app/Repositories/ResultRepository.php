<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 08/06/16
 * Time: 12:54 PM
 */

namespace App\Repositories;


use App\Contracts\Crud;
use App\Events\OnReportPostedEvent;
use App\Events\OnResultPostedEvent;
use App\Models\Result;

class ResultRepository extends Crud
{

    protected $model;


    /**
     * ResultRepository constructor.
     * @param Result $model
     */
    public function __construct(Result $model)
    {
        $this->model = $model;
    }

    public function store($request)
    {
        $data = $request->all();
        $results = collect();
        foreach ($data['student'] as $key => $value)
        {

            $result = $this->create([
                'title' => $data['title'],
                'subject_id' => $data['subject'],
                'pass_mark' => $data['pass_mark'],
                'total_mark' => $data['total_mark'],
                'result_mark' => $data['result_mark'][$key],
                'student_id' => $data['student'][$key],
                'faculty_id' => user()->id,
                'feedback_comment' => $request->has('feedback_comment') ? $data['feedback_comment'] : ''
            ]);
            $results->push($result);
            event(new OnReportPostedEvent($result));
        }
        return $results;
    }


}