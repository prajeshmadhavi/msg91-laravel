<?php

namespace App\Models;

use App\Traits\Likeable;


use App\Traits\Notifiable;
use Baum\Node;

class Comment extends Node
{
    use Likeable, Notifiable;
    
    /**
     * The attributes that are fillable via mass assignment.
     *
     * @var array
     */
    protected $fillable = ['title', 'body', 'poster_type', 'poster_id'];

	/**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = ['commentable_id' => 'int', 'poster_id' => 'int', 'parent_id' => 'int'];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['poster', 'likes', 'commentable'];

    protected $appends = ['type', 'time'];

    /**
     * Determine if the comment has children.
     *
     * @return bool
     */
    public function hasChildren()
    {
        return $this->children()->count() > 0;
    }

    /**
     * Get all of comment's children.
     *
     * @param  array  $columns
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getChildren($columns = ['*'])
    {
        return $this->children()->get($columns);
    }

    /**
     * Get & Cast Created_At to Readable TimeAgo
     * @param $value
     * @return mixed
     */
    public function getTimeAttribute()
    {
        return to_timeline($this->created_at);
    }
    
    /**
     * Get all of the owning commentable models.
     *
     * @return Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function commentable()
    {
        return $this->morphTo();
    }

    /**
     * Get the user that creates the comment.
     *
     * @return Illuminate\Database\Eloquent\Model
     */
    public function poster()
    {
        return $this->morphTo();
    }

    public function getTypeAttribute()
    {
        return "comment";
    }
}