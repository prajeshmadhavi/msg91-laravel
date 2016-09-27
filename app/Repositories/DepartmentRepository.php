<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 08/06/16
 * Time: 12:38 PM
 */

namespace App\Repositories;


use App\Contracts\Crud;
use App\Models\Department;

class DepartmentRepository extends Crud
{

    protected $model;

    /**
     * DepartmentRepository constructor.
     * @param $model
     */
    public function __construct(Department $model)
    {
        $this->model = $model;
    }


    
    
}