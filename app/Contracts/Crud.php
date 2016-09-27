<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 06/06/16
 * Time: 12:10 PM
 */

namespace App\Contracts;


abstract class Crud
{

    protected $orderBy  = array('created_at', 'desc');

    public function exists($id)
    {
        if($check = $this->model->find($id)){
            return true;
        }
        return false;
    }

    public function belongsToUser($id, $user_id)
    {
        if($belongs = $this->model->where(['id' => $id])->where(['user_id' => $user_id])->get()->first())
        {
            return true;
        }
        return false;
    }

    public function getById($uuid,  $with=array(), $load = array())
    {
        if(!empty($load))
        {
            return $this->model->with($with)->where($load)->find($uuid);
        }

        return $this->model->with($with)->find($uuid);

    }

    public function getAll($with = array(), $load = array())
    {
        $limit = \Request::input('limit') ?: 10;
        list($sortField, $sortDir) = $this->orderBy;
        $data = $this->model->with($with)->where($load)->orderBy($sortField, $sortDir)->paginate($limit);
        return $data;
    }
    
    public function loadFiltered($load = array())
    {
        $limit = \Request::input('limit') ?: 10;
        list($sortField, $sortDir) = $this->orderBy;
        $data = $this->model->filter();//where($load)->orderBy($sortField, $sortDir)->paginate($limit);
        return $data;
    }

    public function getFirst($with = array(), $load = array())
    {
        $data = $this->model->with($with)->where($load)->first();
        return $data;
    }

    public function getAllExcept($load = array(), $except)
    {
        $limit = \Request::input('limit') ?: 10;
        list($sortField, $sortDir) = $this->orderBy;
        $data = $this->model->where($load)->where('id', '!=', $except)->orderBy($sortField, $sortDir)->paginate($limit);
        return $data;
    }

    public function lists($data, $col)
    {
        return $data->lists($col);
    }


    /**
     * Create a new item
     * @param array $data
     * @return bool
     */

    public function create(array $data)
    {
        $project = $this->model->create($data);

        if (!$project) {
            return false;
        }

        return $project;
    }

    /**
     * Edit an existing item.
     * @param array $data
     * @param $uuid
     * @return bool
     */
    public function update(array $data, $uuid)
    {
        $item = $this->model->find($uuid);

        $item->update($data);

        if ($item) {
            return $item;
        }
        return false;

    }

    /**
     * Remove a record from db
     * @param $uuid
     * @return bool
     */
    public function delete($uuid)
    {
        $record = $this->model->find($uuid);

        if (is_null($record)) {
            return false;
        } elseif ($record->destroy($uuid)) {
            return true;
        }

        return false;
    }


}