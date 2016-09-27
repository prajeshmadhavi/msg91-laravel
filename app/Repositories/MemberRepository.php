<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 16/07/16
 * Time: 10:37 PM
 */

namespace App\Repositories;


use App\Contracts\Crud;
use App\Models\Member;

class MemberRepository extends Crud
{

    protected $model;

    /**
     * MemberRepository constructor.
     * @param $model
     */
    public function __construct(Member $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->allMembers();
    }

    public function getTaggable()
    {
        return $this->model->taggableMembers();
    }




}