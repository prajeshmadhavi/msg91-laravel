<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 08/06/16
 * Time: 12:43 PM
 */

namespace App\Repositories;

use App\Contracts\Crud;
use App\Events\OnFeedUpdatedEvent;
use App\Facades\Tagger;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;

class EventRepository extends Crud
{

    protected $model;

    protected $directory;

    protected $aws_path;

    /**
     * EventRepository constructor.
     * @param $model
     */
    public function __construct(Event $model)
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


        $event = user()->events()->create([
            'title' => $data['title'],
            'preview_image' => $data['preview_image'],
            'privacy' => $data['privacy'],
           // 'ends' => $data['ending'],
            'location'=> $data['location'],
            'event_days'=> $data['event_days'],
            'starts' => $data['starts']


        ]);
//
        if ( $request->has('tags') && count($request->get('tags')) > 0  )
        {
            Tagger::tagMembers($request->get('tags'), $event);
        }

        event(new OnFeedUpdatedEvent($event));
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
        $all_events = $this->getAll(['comments', 'likes']);
        $department_id = is_student() ? user()->department_id : user()->department->first()->id;
        $only_me = $all_events->where('privacy', ONLY_ME)->where('poster_id', user()->id)->where('poster_type', get_class(user()));
        $everyone = $all_events->where('privacy', EVERYONE);
        $university = $all_events->where('privacy', UNIVERSITY)->where('poster.university_id', user()->university_id);

        //Private to Department
        $department = collect();

        foreach ($all_events->where('privacy', DEPARTMENT) as $note)
        {

            if($note->poster->type == 'student')
            {
                $department = $all_events->where('poster.department_id', $department_id);
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