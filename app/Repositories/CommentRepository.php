<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 06/06/16
 * Time: 12:04 PM
 */

namespace App\Repositories;


use App\Contracts\Crud;
use App\Models\Comment;

class CommentRepository extends Crud
{

	protected $model;

	public function __contrtuct(Comment $model)
	{
		$this->$model = $model;
	}

	public function store($request)
	{

	}

}