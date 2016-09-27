<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 08/06/16
 * Time: 12:35 PM
 */

namespace App\Repositories;


use App\Contracts\Crud;
use App\Models\Course;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\Subject;
use App\Models\University;

class SubjectRepository extends Crud
{

    protected $model;


    /**
     * SubjectRepository constructor.
     * @param $model
     */

    public function __construct(Subject $model)
    {
        $this->model = $model;
    }

    public function store($request)
    {
        return $this->storePrivateSubject($request);
    }   

    private function storePrivateSubject($data)
    {
        $data = $data->only('faculty', 'department', 'name');

        $department = Department::find($data['department']);
        $subject = $this->getFirst(['name' => $data['name']]);
        if(!$subject) {$subject = $this->create($data);}
        $subject->department()->save($department,['university_id' => university()->id]);
        
        //        if($data->has('faculty'))
//        {
//
//            $faculty = Faculty::find($data['faculty']);
//
//            if ($subject) {
//
//                /*
//                 * If subject not in my department
//                 */
//
//                !$department->subject->contains($subject->id) ? $department->subjects()->attach($subject->id) : null;
//
//                $faculty->subjects()->attach($subject->id);
//                $faculty->department->contains($department->id) ? null : $faculty->department()->attach($department->id);
//
//                return $subject;
//            }
//
//
//            $faculty->subjects()->attach($subject->id);
//            $faculty->department->contains($department->id) ? null : $faculty->department()->attach($department->id);
//
//        }

        //        $faculty = $this->facultyRepo->getById($request->get('faculty'));
//        $subject = $this->subjectRepo->getFirst(['name'=> $request->get('name')]);
//
//        //If subject exists and assigned to faculty
//        if($request->has('faculty'))
//        {
//            if ($subject && $faculty->subjects->contains($subject->id)) {
//
//                Flash::message('Subject Already Assigned to Faculty');
//                return redirect()->back();
//            }
//        }
        
        return $subject;
    }

    public function getAllUniversitySubjects()
    {
        $departments = university()->department;
        $subjects = collect();
        foreach ($departments as  $department)
        {
            $subject = $department->subjects(university()->id);
            $subjects->push($subject);
        }
        return $subjects->collapse();
    }

    public function getSubjectsByDepartment($department_id)
    {

    }

    public function getAllSubjectsByFaculty($faculty_id)
    {

    }

    public function getCoursesByUniversity($university)
    {
        $university = University::find($university);
        return $university->courses;
    }
    
    public function getStudentSubjects()
    {
        $student = user();
        return $student->subjects;
    }
    
    public function getSubjectStudents($subject)
    {
        $subject = $this->getById($subject);
        return $subject->students->where('university_id', user()->university->id);
    }




}