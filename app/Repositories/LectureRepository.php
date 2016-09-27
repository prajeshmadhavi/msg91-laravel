<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 08/06/16
 * Time: 12:52 PM
 */

namespace App\Repositories;


use App\Contracts\Crud;
use App\Models\Lectures;

class LectureRepository extends Crud
{

    protected $model;

    /**
     * LectureRepository constructor.
     * @param $model
     */
    public function __construct(Lectures $model)
    {
        $this->model = $model;
    }


    public static function persist($request)
    {
        $lecture = Lectures::create([
            'name' => $request->get('name'),
            'subject_id' => $request->get('subject'),
            'faculty_id' => user()->id
        ]);
        return $lecture;
    }
    
    public function byFacultyAndSubject($subject, $faculty)
    {
        return $this->getAll(['faculty_id' => $faculty ,'subject_id' =>  $subject]);
    }
    
    
  	


}