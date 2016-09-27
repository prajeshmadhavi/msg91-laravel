<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 08/06/16
 * Time: 9:58 PM
 */

namespace App\Repositories;


use App\Contracts\Crud;
use App\Events\OnFacultyInviteEvent;
use App\Models\Faculty;

class FacultyRepository extends Crud
{

    protected $model;

    /**
     * FacultyRepository constructor.
     * @param $model
     */
    public function __construct(Faculty $model)
    {
        $this->model = $model;
    }

    public function invite($request)
    {

        $data = $request->all();
        $password = str_random(20);
        session()->put('faculty_pwd', $password);
        $data['password'] = bcrypt($password);
        $data['university_id'] = university()->id;
        $faculty = $this->create($data);
        $faculty->subjects()->attach($data['subject'], ['department_id' => $data['department']]);
        event(new OnFacultyInviteEvent($faculty));
        return $faculty;
    }

}