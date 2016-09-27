<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 12/07/16
 * Time: 12:44 PM
 */

namespace App\Traits;


use App\Models\Like;

trait Likeable
{

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }

    public function likes_count()
    {
        return $this->likes()->count();
    }

}