<?php

namespace App\Models;

use AlgoliaSearch\Laravel\AlgoliaEloquentTrait;
use App\Traits\Commentable;
use App\Traits\Likeable;
use App\Traits\Taggable;

class Project extends Post
{

    use AlgoliaEloquentTrait;

    public $indices = ['social_university'];

    protected $table = 'projects';

    protected $fillable = [

        'title',
        'description',
        'preview_image',
        'privacy',
        'poster_id',
        'poster_type'
    ];


    protected $casts = ['poster_id' => 'int'];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['poster'];


    function getTypeAttribute()
    {
        return 'project';
    }
}
