<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 22/04/16
 * Time: 6:22 AM
 */

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;


class Member extends Model implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    public function allMembers()
    {
        $students = Student::all();
        $faculty = Faculty::all();
        $admin = UniversityAdmin::all();
        $members = $students->push($faculty)->push($admin);
        return $members->flatten();
    }

    public function taggableMembers()
    {
        $students = collect();
        $faculties = collect();
        $admin = collect();

        if (is_student()) {
            $students = Student::where('university_id', university()->id)
                ->where('department_id', user()->department->id)
                ->where('id', '!=', user()->id)
                ->get();
            $faculties = Faculty::where('university_id', university()->id)->get();
        }

        if (is_faculty()) {
            foreach (user()->subjects as $subject) {
                $students[] = $subject->students->where('university_id', university()->id);
            }
            $faculties = Faculty::where('university_id', university()->id)
                ->where('id', '!=', user()->id)->get();
        }

        if (is_university()) {
            $students = Student::where('university_id', university()->id)->get();

            $faculties = Faculty::where('university_id', university()->id)->get();
        }


        $followers = user()->getFollowers();
        $taggable = collect([$students, $faculties, $followers, $admin])->collapse();

        return $taggable;
    }

    public function allStudents()
    {
        $students = Student::where('university_id', university()->id)->get();
        return $students;
    }

    public static function allByUniversity()
    {

        $students = Student::where('university_id', university()->id)->get();
        $faculty = Faculty::where('university_id', university()->id)->get();
        //$admin = UniversityAdmin::where('university_id', university()->id)->get();
        return $students->merge($faculty);
    }

    public function allByStudents()
    {
        $students = Student::where('university_id', university()->id)->get();
        return $students;
    }

//    public function allByStudents()
//    {
//        $students = Student::where('university_id', university()->id)->get();
//        return $students;
//    }


    public function allFaculties()
    {

    }
    
    public function notifications()
    {
        return $this->morphMany(Notification::class, 'user');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'poster');
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'liker');
    }

    public function answers()
    {
        return $this->morphMany(Answer::class, 'answerer');
    }

    public function tags()
    {
        return $this->morphMany(Tag::class, 'tagged');
    }

}
