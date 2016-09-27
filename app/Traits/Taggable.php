<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 12/07/16
 * Time: 9:06 PM
 */

namespace App\Traits;


use App\Models\Tag;

trait Taggable
{

    public function tags()
    {
        return $this->morphMany(Tag::class, 'post');
    }

}