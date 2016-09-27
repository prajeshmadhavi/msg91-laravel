<?php

namespace App\Models;

use App\Contracts\Report;
use Illuminate\Database\Eloquent\Model;

class Result extends Model implements Report
{
    protected  $table = 'results';

    protected $fillable = [

        'title',
        'result_mark',
        'pass_mark',
        'total_mark',
        'subject_id',
        'student_id',
        'faculty_id',
        'is_viewed',
        'feedback_comment'

    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    
    protected $casts = [

        'subject_id' => 'int',
        'student_id' => 'int',
        'faculty_id' => 'int',
        'result_mark' => 'int',
        'pass_mark' => 'int',
        'total_mark' => 'int',
        'is_viewed' => 'boolean'
    ];
    
    protected $with = ['subject'];

    protected $appends = ['type'];
    
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function getTypeAttribute()
    {
        return 'result';
    }
    

}
