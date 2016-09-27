<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 08/06/16
 * Time: 12:50 PM
 */


namespace App\Repositories;

use App\Models\Project;
use App\Contracts\Crud;
use App\Facades\Tagger;
use App\Events\OnFeedUpdatedEvent;
use Illuminate\Support\Facades\Storage;


class ProjectRepository extends Crud
{

    protected $model;

    protected $directory;

    protected $aws_path;

    /**
     * NoteRepository constructor.
     * @param $model
     */
    public function __construct(Project $model)
    {
        $this->model = $model;
        if(user())
        {
            $this->aws_path = UPLOAD_URL.md5(user()->email);
        }

    }
    
    public function store($request)
    {
        $data = $request->all();

        if ($request->has('preview_image'))
        {
            $data['preview_image'] = $this->storePreviewImage($request);
        }

        $project = user()->projects()->create([
            'title' => $data['title'],
            'preview_image' => $data['preview_image'],
            'privacy' => $data['privacy'],
            'description' => $data['description']

        ]);

        if ( $request->has('tags') && count($request->get('tags')) > 0  )
        {
            Tagger::tagMembers($request->get('tags'), $project);
        }

        event(new OnFeedUpdatedEvent($project));
    }

   /* public function getUniversityProjects($university_id)
    {
        $projects = $this->getAll();

        $projects = $projects->reject(function ($value, $key) use ($university_id) {

            return $value->poster()->univeristy_id !== $university_id;

        });

        return $projects->all();
    }*/

    public function storeProjectInsert ($request){

    $data = $request->all();


    if ($request->has('files'))
    {
        //$data['files'] = $this->aws_path . '/' . $data['files'];
        Storage::makeDirectory(upload_path());
        $name = $request->get('files');
        $file_name = str_random(10) . base64_extn($name);
        $file_path = upload_path() . '/' . $file_name;
        Storage::put($file_path, decode_base64($name));
        return $this->aws_path . '/' . $file_name;

    }
        //return $data;

        }


    private function storePreviewImage($request)
    {
        Storage::makeDirectory(upload_path());
        $name = $request->get('preview_image');
        $file_name = str_random(10) . base64_extn($name);
        $file_path = upload_path() . '/' . $file_name;
        Storage::put($file_path, decode_base64($name));
        return $this->aws_path . '/' . $file_name;
    }

    public function withPrivacy()
    {
        $all_projects = $this->getAll(['comments', 'likes']);
        $department_id = is_student() ? user()->department_id : user()->department->first()->id;
        $only_me = $all_projects->where('privacy', ONLY_ME)->where('poster_id', user()->id)->where('poster_type', get_class(user()));
        $everyone = $all_projects->where('privacy', EVERYONE);
        $university = $all_projects->where('privacy', UNIVERSITY)->where('poster.university_id', user()->university_id);

        //Private to Department
        $department = collect();

        foreach ($all_projects->where('privacy', DEPARTMENT) as $note)
        {

            if($note->poster->type == 'student')
            {
                $department = $all_projects->where('poster.department_id', $department_id);
            }

//            if($note->poster->type == 'faculty')
//            {
//                $department = $note->where('poster.department', $department_id);
//            }
//
//            if($note->poster->type == 'admin')
//            {
//                $department = $this->getAll()->where('poster.department_id', $department_id);
//            }
//
//            $department = $department->collapse();
        }

        return array_merge([$only_me, $everyone, $university, $department]);

    }
}
