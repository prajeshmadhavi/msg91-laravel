<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 23/06/16
 * Time: 6:14 AM
 */

namespace App\Repositories;


use App\Contracts\Crud;
use App\Exceptions\AlreadyEnrolledException;
use App\Models\Course;
use App\Models\CourseLecture;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class CourseRepository extends Crud
{

    protected $model;

    /**
     * CourseRepository constructor.
     * @param $model
     */
    public function __construct(Course $model)
    {
        $this->model = $model;
    }

    public function store($request)
    {
        $course = $this->create([
            'name' => $request->get('name'),
            'university_id' => university()->id,
            'department_id' => $request->get('department'),
            'moderator_id' => user()->id,
        ]);
        return $course;
    }

    public function getUniversityCourses()
    {
        return university()->courses;
    }

    public function storeLecture($request)
    {
        $url = string_replace(urldecode($request->get('video_url')), 'https://www.youtube.com/watch?v=', '');
        
        $lecture = CourseLecture::create([
            'title'=> $request->get('title'),
            'course_id' => $request->get('subject'),
            'video_url' => $url,
            'brief_note' => $request->get('brief_note')
         ]);
        
        return $lecture;
    }

    public function enroll($course_id)
    {
        $course = $this->getById($course_id);
        if($course->is_enrolled()){
            throw  new AlreadyEnrolledException('Already enrolled to this course');
        }
        $enrolled = $course->enrolled()->attach(user()->id);
        return $enrolled;
    }

    public function isEnrolled($course_id)
    {
        $course = $this->getById($course_id);
        $is_enrolled = $course->enrolled->where('student_id', user()->id)->first();
        if (is_null($is_enrolled)) {
            return false;
        }
        return true;
    }

    public function delete($uuid)
    {
        $lecture = CourseLecture::find($uuid);
        if($lecture->course->moderator->id ===  user()->id){
            return $lecture->delete($uuid);
        }
        throw new UnauthorizedHttpException('You Are Not allowed to Delete this Entry');
    }


}