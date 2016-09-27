<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    protected $table = 'assignments';

    protected $fillable = [

        'title',
        'has_quiz',
        'due_date',
        'has_file',
        'subject_id',
        'faculty_id'
    ];

   protected $casts = [

       'has_quiz' => 'boolean',
       'has_file' => 'boolean',
       'subject_id' => 'int',
       'faculty_id' => 'int'

   ];
    
    protected $with = ['subject', 'quiz'];

    protected $appends = ['type'];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }
    
    public function quiz()
    {
        return $this->hasMany(Quiz::class);
    }

    public function student()
    {
        return $this->belongsToMany(Student::class, 'student_assignments', 'assignment_id', 'student_id')->withPivot('note_file','pending', 'approved', 'completed');
    }

    public function getTypeAttribute()
    {
        return 'assignment';
    }



}
