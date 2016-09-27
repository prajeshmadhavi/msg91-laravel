<?php

namespace App\Models;

use AlgoliaSearch\Laravel\AlgoliaEloquentTrait;
use App\Traits\Followable;
use App\Traits\Postable;
use Illuminate\Support\Facades\Log;

class Faculty extends Member
{

    use Followable, Postable, AlgoliaEloquentTrait;

    protected $table = 'faculties';

    public $indices = ['social_university'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'name',
        'email',
        'avatar',
        'gender',
        'password',
        'dob',
        'university_id',
        'is_active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [

        'university_id' => 'int',
        'is_active' => 'boolean'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    //protected $with = ['university','department'];

    protected $appends = ['type', 'my_university'];


    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'faculty_subjects')->withPivot('department_id');
    }

    public function department()
    {
        return $this->belongsToMany(Department::class, 'faculty_subjects');
    }

    public function result()
    {
        return $this->hasMany(Result::class);
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }

    public function lecture()
    {
        return $this->hasMany(Lectures::class);
    }

    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }

    /**
     *  Obtain a list of follow taking all the faculty subjects
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function student()
    {
        return $this->belongsToMany(Student::class, 'student_subject', 'faculty_id', 'student_id')->withPivot('subject_id', 'department_id', 'university_id');
    }

    /**
     * Obtain all follow of a specific subject taught by this Faculty
     * @param $subject_id
     * @return mixed
     */
    public function student_by_subject($subject_id)
    {
        return $this->student->where('pivot.student_id', $subject_id);
    }

    public function getTypeAttribute()
    {
        return 'faculty';
    }

    public function getMyUniversityAttribute()
    {
        return $this->university()->getResults()->name;
    }


}
