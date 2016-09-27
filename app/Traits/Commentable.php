<?php namespace App\Traits;

use App\Models\Comment;


trait Commentable
{
    /**
     * Get all of the model's comments.
     * @return mixed
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
    
}


