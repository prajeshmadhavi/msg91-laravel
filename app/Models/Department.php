<?php

namespace App\Models;

use App\Traits\Followable;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{

    use Followable;

    protected  $table = 'departments';

    protected $fillable = ['name', 'added_by'];

    public function university()
    {
        return $this->belongsToMany(University::class, 'university_departments');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'university_department_subjects', 'department_id', 'subject_id')->withPivot('university_id');
    }

    public function student()
    {
        return $this->hasMany(Student::class);
    }

    public function faculty()
    {
        return $this->belongsToMany(Faculty::class, 'faculty_subjects');
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
