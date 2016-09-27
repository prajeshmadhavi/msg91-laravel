<?php

namespace App\Models;


use AlgoliaSearch\Laravel\AlgoliaEloquentTrait;
use App\Traits\Followable;
use App\Traits\Postable;

class Student extends Member
{

    use Followable, Postable;//, AlgoliaEloquentTrait;

    public $indices = ['social_university'];

    protected $table = 'students';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [

        'name',
        'avatar',
        'cover_photo',
        'email',
        'registration_id',
        'dob',
        'batch_year',
        'gender',
        'phone',
        'department_id',
        'university_id',
        'is_active',
        'totp',
        'totp_status',
        'password'
    ];


    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    //protected $with = ['university'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    
    protected $casts = [

        'department_id' => 'int',
        'university_id' => 'int',
        'is_active' => 'boolean',
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $appends = ['type', 'my_department', 'my_university'];

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'student_subject')->withPivot('faculty_id', 'department_id', 'university_id');
    }

    public function result()
    {
        return $this->hasMany(Result::class);
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }
    
    public function assignment()
    {
        return $this->belongsToMany(Assignment::class, 'student_assignments')->withPivot('pending', 'approved', 'completed');
    }

    public function enrolled_courses()
    {
        return $this->belongsToMany(Course::class, 'student_enrolled_courses');
    }

    public function getTypeAttribute()
    {
        return 'student';
    }

    public function getMyDepartmentAttribute()
    {
        return $this->department()->getResults()->name;
    }

    public function getMyUniversityAttribute()
    {
        return $this->university()->getResults()->name;
    }
    

}
