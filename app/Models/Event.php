<?php

namespace App\Models;


use AlgoliaSearch\Laravel\AlgoliaEloquentTrait;
use App\Contracts\TimeLineFeed;
use App\Traits\Commentable;
use App\Traits\Likeable;
use App\Traits\Notifiable;
use App\Traits\Taggable;

class Event extends Post
{
    use AlgoliaEloquentTrait;

    public $indices = ['social_university'];

    use Notifiable;

    protected  $table = 'events';

    protected $fillable = [

        'title',
        'location',
        'event_days',
        'preview_image',
        'starts',
        'ends',
        'privacy',
        'poster_id',
        'poster_type'
    ];
    
    protected $casts = [

        'poster_id' => 'int'
    ];


    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['poster'];


    public function getFilesAttribute($value)
    {
        if(str_contains($value, ','))
        {
            return explode(',', $value);
        }
        return $value;
    }

    /**
     *  Identify as a generic feed
     * @return string
     */


    function getTypeAttribute()
    {
        return 'event';
    }

}
