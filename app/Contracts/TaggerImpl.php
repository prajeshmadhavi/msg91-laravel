<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 17/07/16
 * Time: 8:24 PM
 */

namespace App\Contracts;


use App\Models\Student;
use App\Models\Tag;

class TaggerImpl
{
    public function tagMembers($users, $post)
    {
        //$users = array_map("arr_to_int", [$users]);

        if (count($users) > 1) {
            $this->tagManyMembers($users, $post);
            return;
        }

        $tag = new Tag();
        $student = Student::find($users[0]);
        $post->tags()->save($tag);
        $student->tags()->save($tag);
        $tag->push();
    }

    protected function tagManyMembers($users, $post)
    {
        foreach ($users as $user) {

            $tag = new Tag();
            $post->tags()->save($tag);
            $student = Student::find($user);
            $student->tags()->save($tag);
            $tag->push();
        }
    }
}