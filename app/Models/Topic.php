<?php

namespace App\Models;

use AlgoliaSearch\Laravel\AlgoliaEloquentTrait;
use App\Contracts\TimeLineFeed;
use App\Traits\Commentable;
use App\Traits\FilterMe;
use App\Traits\Likeable;
use App\Traits\Notifiable;
use App\Traits\Taggable;
use Illuminate\Database\Eloquent\Model;

class Topic extends Post
{

    use AlgoliaEloquentTrait;

    public $indices = ['social_university'];

    protected  $table = 'questions';

    protected $fillable = [

        'title',
        'description',
        'privacy',
        'poster_id',
        'poster_type'
    ];

    protected $casts = ['poster_id' => 'int'];

    protected $with = [ 'poster'];
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
    
    /**
     *  Identify as a generic feed
     * @return string
     */
    public function getTypeAttribute()
    {
        return 'topic';
    }
    
}
