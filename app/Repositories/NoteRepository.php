<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 08/06/16
 * Time: 12:41 PM
 */

namespace App\Repositories;


use App\Contracts\Crud;
use App\Events\OnFeedUpdatedEvent;
use App\Facades\Tagger;
use App\Models\Note;
use Illuminate\Support\Facades\Storage;
use Psy\Test\Exception\RuntimeExceptionTest;

class NoteRepository extends Crud
{

    protected $model;

    protected $directory;

    protected $aws_path;

    /**
     * NoteRepository constructor.
     * @param $model
     */
    public function __construct(Note $model)
    {
        $this->model = $model;
        if (user()) {
            $this->aws_path = UPLOAD_URL . md5(user()->email);
        }
    }

    public function store($request)
    {
        if (is_university()) {
            return $this->storeAdminNote($request);
        }

        return $this->storeStudentAndFacultyNote($request);
    }

    private function storeAdminNote($request)
    {
        $data = $request->all();

        if ($request->has('preview_image'))
        {
            $data['preview_image'] = $this->storePreviewImage($request);
        }

        if ($request->has('files'))
        {
            $data['files'] = $this->aws_path . '/' . $data['files'];
        }

        $note = user()->notes()->create($data);

        if ($request->has('tags') && count($request->get('tags')) > 0) {
            Tagger::tagMembers($request->get('tags'), $note);
        }

        event(new OnFeedUpdatedEvent($note));
    }

    private function storeStudentAndFacultyNote($request)
    {
        $data = $request->all();

        if ($request->has('preview_image'))
            $data['preview_image'] = $this->storePreviewImage($request);
        else
            $data['preview_image'] ='https://s3-us-west-2.amazonaws.com/social-university/static/note_preview.png';

        if ($request->has('files'))
            $data['files'] = $this->aws_path . '/' . $data['files'];

        $data['lecture_id'] = $request->has('lecture_id') ? $data['lecture_id'] : "";

        $note = user()->notes()->create($data);

        if ($request->has('tags') && count($request->get('tags')) > 0) {
            Tagger::tagMembers($request->get('tags'), $note);
        }


        event(new OnFeedUpdatedEvent($note));

    }

    public function getUniversityNotes($university_id)
    {
        $notes = $this->getAll();

        $notes = $notes->reject(function ($value, $key) use ($university_id) {

            return $value->poster()->univeristy_id !== $university_id;

        });

        return $notes->all();
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
        $all_notes = $this->getAll(['comments', 'likes']);
        $department_id = is_student() ? user()->department_id : user()->department->first()->id;
        $only_me = $all_notes->where('privacy', ONLY_ME)->where('poster_id', user()->id)->where('poster_type', get_class(user()));
        $everyone = $all_notes->where('privacy', EVERYONE);
        $university = $all_notes->where('privacy', UNIVERSITY)->where('poster.university_id', user()->university_id);

        //Private to Department
        $department = collect();

        foreach ($all_notes->where('privacy', DEPARTMENT) as $note)
        {

            if($note->poster->type == 'student')
            {
                $department = $all_notes->where('poster.department_id', $department_id);
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