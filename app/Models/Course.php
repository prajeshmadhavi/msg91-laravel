<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected  $table = 'courses';

    protected $fillable = [

        'name',
        'university_id',
        'department_id',
        'moderator_id'
    
    ];

    protected $casts = [
        'university_id' => 'int',
        'department_id' => 'int',
        'moderator_id' => 'int',
    ];
    
    protected $with = ['lectures'];

    protected $hidden = ['created_at'];

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function lectures()
    {
        return $this->hasMany(CourseLecture::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function moderator()
    {
        return $this->belongsTo(UniversityAdmin::class, 'moderator_id');
    }

    public function enrolled()
    {
        return $this->belongsToMany(Student::class, 'student_enrolled_courses');
    }

    public function is_enrolled()
    {
        $is_enrolled = $this->enrolled->where('pivot.student_id', user()->id)->first();
        if (is_null($is_enrolled)) {
            return false;
        }
        return true;
    }






}
