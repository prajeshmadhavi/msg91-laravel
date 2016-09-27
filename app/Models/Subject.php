<?php

namespace App\Models;

use AlgoliaSearch\Laravel\AlgoliaEloquentTrait;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{

    public $indices = ['social_university'];

    protected $table = 'subjects';

    protected $appends = ['type'];

    protected $fillable = [

        'name',
        'code'
    ];

    public function department()
    {
        return $this->belongsToMany(Department::class, 'university_department_subjects')->withPivot('university_id');
    }

    public function faculties()
    {
        return $this->belongsToMany(Faculty::class, 'faculty_subjects');
    }

    public function faculty($uni_id)
    {
        return $this->faculties->where('university_id', $uni_id)->first();
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_subject')->withPivot('faculty_id', 'department_id', 'university_id');
    }

    public function lectures()
    {
        return $this->hasMany(Lectures::class);
    }

    public function assignment()
    {
        return $this->hasMany(Assignment::class);
    }

    public function getTypeAttribute()
    {
        return 'subject';
    }

}
