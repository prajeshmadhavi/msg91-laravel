<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 08/06/16
 * Time: 12:39 PM
 */

namespace App\Repositories;


use App\Contracts\Crud;
use App\Models\University;

class UniversityRepository extends Crud
{

    protected $model;

    /**
     * UniversityRepository constructor.
     * @param $model
     */
    public function __construct(University $model)
    {
        $this->model = $model;
    }


}