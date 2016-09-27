<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lectures extends Model
{

    protected $table = 'lectures';

    protected $fillable = [

        'name',
        'subject_id',
        'faculty_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected  $casts = [

        'subject_id' => 'int',
        'faculty_id' => 'int'
    ];


    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['notes'];


    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class, 'lecture_id');
    }

    


}
