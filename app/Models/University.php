<?php

namespace App\Models;

use AlgoliaSearch\Laravel\AlgoliaEloquentTrait;
use App\Traits\Followable;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{

    use Followable, AlgoliaEloquentTrait;

    public $indices = ['social_university'];

    protected $table = 'universities';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [

        'name',
        'email',
        'logo',
        'address',
        'phone',
        'alternate_phone',
        'additional_comment',
        'is_verified',
        'active'
    ];


    protected $casts = ['is_verified' => 'boolean', 'active' => 'boolean'];

    protected $appends = ['type', 'follower_count'];


    public function admin()
    {
        return $this->hasMany(UniversityAdmin::class);
    }

    public function faculty()
    {
        return $this->hasMany(Faculty::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function department()
    {
        return $this->belongsToMany(Department::class, 'university_departments');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'university_department_subjects')->withPivot('department_id', 'subject_id');
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function libraries()
    {
        return Note::all()->where('poster.university_id', $this->id);
    }

    public function members_count()
    {
        $student = university()->students->count();
        $faculty = university()->faculty->count();
        $admin = university()->admin->count();
        return ($student + $faculty + $admin);
    }

    public function department_members($department)
    {
        $students = $department->student->where('university_id', $this->id);
        $faculty = $department->faculty->where('university_id', $this->id);
        $members = $students->push($faculty);
        return $members->flatten();
    }

    public function getTypeAttribute()
    {
        return 'university';
    }

    public function getFollowerCountAttribute()
    {
        return $this->followers()->count();
    }
}
