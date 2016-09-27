<?php

namespace App\Models;

use AlgoliaSearch\Laravel\AlgoliaEloquentTrait;

class Note extends Post
{

    use AlgoliaEloquentTrait;

    public $indices = ['social_university'];

    protected $table = 'notes';

    protected $fillable = [

        'title',
        'description',
        'preview_image',
        'files',
        'privacy',
        'subject_id',
        'poster_id',
        'poster_type',
        'lecture_id',
        'department_id'
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [ 'poster'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */

    protected $casts = ['subject_id' => 'int', 'poster_id' => 'int', 'lecture_id' => 'int'];


    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function lecture()
    {
        return $this->belongsTo(Lectures::class);
    }
    
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    /**
     * Get & Cast Created_At to Readable TimeAgo
     * @param $value
     * @return mixed
     */
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
    public function getTypeAttribute()
    {
        return 'note';
    }

}
