<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 13/07/16
 * Time: 2:13 PM
 */

namespace App\Repositories;


use App\Http\Requests\Request;
use Aws\Exception\AwsException;
use Illuminate\Support\Facades\Storage;

class FileRepository
{

    protected $file;

    protected $url;

    /**
     * FileRepository constructor.
     * @param $file
     */
    public function __construct(Storage $file)
    {
        $this->file = $file;
        $this->url = 'https://s3-us-west-2.amazonaws.com/social-university/files/';
    }

    public function store($file)
    {
        $extn = $file->getClientOriginalExtension();
        $file = $file->getClientOriginalName();
        $file_name = $this->url.str_random(5).'.'.$extn;
        $stored  = Storage::put($file_name, file_get_contents($file->getRealPath()));
        if(!$stored)
        {
            throw new \Exception();
        }
        return $file_name;
    }

    public function update()
    {

    }

    public function exists()
    {

    }

    public function delete()
    {

    }

}