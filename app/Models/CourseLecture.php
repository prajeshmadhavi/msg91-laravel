<?php

namespace App\Models;

use App\Traits\Commentable;
use Illuminate\Database\Eloquent\Model;

class CourseLecture extends Model
{
    use Commentable;

    protected  $table = 'course_lectures';
    
    protected $fillable = [

        'title',
        'course_id',
        'video_url',
        'brief_note'
    ];

    protected  $with = ['comments'];

    protected $casts = ['course_id' => 'int'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    
    
}
