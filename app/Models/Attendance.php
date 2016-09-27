<?php

namespace App\Models;

use App\Contracts\Report;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model implements Report
{


    protected $table = 'attendances';

    protected $fillable = [

        'period',
        'total_class',
        'class_attended',
        'feedback_comment',
        'subject_id',
        'student_id',
        'faculty_id',
        'is_viewed'
    ];

    protected $appends = ['type'];

    protected $with = ['subject'];

    protected $casts = [
        'total_class' => 'int',
        'subject_id' => 'int',
        'student_id' => 'int',
        'faculty_id' => 'int',
        'class_attended' => 'int',
        'is_viewed' => 'boolean'
    ];

    protected $hidden = ['updated_at'];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function getTypeAttribute()
    {
        return 'attendance';
    }

}
