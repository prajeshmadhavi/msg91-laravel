<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 09/06/16
 * Time: 5:54 AM
 */

namespace App\Repositories;


use App\Contracts\Crud;
use App\Models\UniversityAdmin;

class UniversityAdminRepository extends Crud
{

    protected $model;

    /**
     * UniversityAdminRepository constructor.
     * @param $model
     */
    public function __construct(UniversityAdmin $model)
    {
        $this->model = $model;
    }


}