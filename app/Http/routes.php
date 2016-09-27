<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Models\Event;
use App\Models\Note;
use App\Models\Project;
use App\Models\Student;
use App\Models\Topic;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;




ini_set('xdebug.max_nesting_level', 500);

$this->post('uploadNoteFile', function (Request $request) {

    Storage::makeDirectory(upload_path());
    $file = $request->file('note_additional_files');
    $raw = file_get_contents($file->getRealPath());
    $file_name = unique_file_name($file);
    $file_path = upload_path() . '/' . $file_name;
    Storage::put($file_path, $raw);

    return $file_name;
});
$this->post('removeNoteFile', function (Request $request) {
    return (int)Storage::delete(upload_path() . '/' . $request->get('file'));
});


$this->get('/', 'GenericController@index');
$this->post('projectImages', 'PostController@projectImageUpload');
$this->post('newsImages', 'NewsController@newsImageUpload');
$this->post('login', 'Auth\AuthController@login');
$this->post('password/reset', 'Auth\PasswordController@postReset');

$this->post('optlogin', 'Auth\OTPAuthController@loginWithOTP');
$this->post('verifyOTP', 'Auth\OTPAuthController@verifyOTPLogin');
$this->get('nullifyOTP/{otp}', 'Auth\OTPAuthController@nullifyOTP');


$this->get('logout', 'Auth\AuthController@logout');


$this->get('profile/{id?}', 'StudentController@profile');

$this->post('postEvent', 'PostController@postEvent');
$this->post('postNote', 'PostController@postNote');
$this->post('postNews', 'PostController@postNews');
$this->post('postQuestion', 'PostController@postQuestion');
$this->post('postProject', 'PostController@postProject');
$this->post('postQuestionAnswer', 'PostController@postQuestionAnswer');
$this->get('markCorrectAnswer/{best_answer}/{topic}', 'PostController@markCorrectAnswer');

$this->post('postAssignment', 'FacultyController@postAssignment');
$this->post('postResult', 'FacultyController@postResult');
$this->post('postAttendance', 'FacultyController@postAttendance');

$this->post('takeQuizAssignment', 'StudentController@attemptAssignment');
$this->post('submitFileAssignment', 'StudentController@submitAssignmentFile');


$this->get('subjects', 'GenericController@getSubjects');
$this->get('topics', 'GenericController@getTopics');
$this->get('/me/topics', 'GenericController@getMyTopics');
$this->get('projects', 'GenericController@getProject');
$this->get('me/projects', 'GenericController@getMyProjects');
$this->get('subject_faculty', 'GenericController@getSubject');
$this->get('subject_lectures', 'GenericController@getSubjectLecture');
$this->get('student/profile/{id?}', 'GenericController@getStudentProfile');
$this->get('course_details/{id}', 'StudentController@getCourseDetails');
$this->get('course/delete/{id}', 'UniversityController@deleteCourse');
$this->get('course/enroll/{course_id}', 'StudentController@enrollToCourse');
$this->get('course/is_enrolled/{course_id}', 'StudentController@isEnrolled');

$this->get('university/{id?}', 'GenericController@getUniversity');
$this->get('universities/following', 'GenericController@getFollowingUniversities');
$this->get('search', 'SearchController@putThrough');


$this->group(['prefix' => 'data'], function () {

    $this->get('getTaggable', 'ApiController@getTaggable');
    $this->get('getSubjects', 'ApiController@getSubjects');
    $this->get('getSubjectStudent/{subject}', 'ApiController@getSubjectStudent');
    $this->get('getDepartmentSubjects/{id}', 'ApiController@getDepartmentSubjects');
    $this->get('lectures/{subject}/{faculty}', 'ApiController@getLectures');
    $this->get('lectures/{subject}', 'ApiController@getLecturesBySubject');
    $this->get('lecture/{id}', 'ApiController@getLecturesById');
    $this->get('posts', 'ApiController@getPosts');
    $this->get('topics', 'ApiController@getTopics');
    $this->get('topic/{id}', 'ApiController@getTopicById');
    $this->get('/mytopics', 'ApiController@getMyTopics');
    $this->get('/myprojects', 'ApiController@getMyProjects');
    $this->get('notes', 'ApiController@getNotes');
    $this->get('note/{id}', 'ApiController@getNoteById');

    $this->get('projects', 'ApiController@getProjects');
    $this->get('project/{id}', 'ApiController@getProjectById');

    $this->get('news', 'ApiController@getNews');
    $this->get('new/{id}', 'ApiController@getNewsById');

    $this->get('events', 'ApiController@getEvent');
    $this->get('event/{id}', 'ApiController@getEventById');

    $this->get('library/{as?}', 'ApiController@getLibrary');
    $this->get('updates/{as?}', 'ApiController@getUpdate');
    $this->get('courses/{university}', 'ApiController@getUniversityCourses');
    $this->get('courses_details/{course}', 'ApiController@getCourseDetails');

    $this->get('notifications', 'ApiController@getNotifications');
    $this->get('notifications/markAsRead/{uuid}', 'ApiController@markAsRead');

    $this->get('notifications/academic', 'ApiController@getAcademicNotifications');

    $this->get('feed', 'ApiController@getFeedData');

});


/**
 *  SystemWide Commenting Routes
 */
$this->post('comment', 'CommentController@postComment');


/**
 *  Like Module Routes
 */
$this->get('like/{type}/{id}', 'LikeController@like');
$this->get('is_liked/{type}/{id}', 'LikeController@is_liked');
$this->get('unlike/{type}/{id}', 'LikeController@unlike');


/**
 * Follow and Unfollow Routes
 */
$this->get('follow/{type}/{id}', 'FollowController@follow');
$this->get('unfollow/{type}/{id}', 'FollowController@unfollow');
$this->get('followers', 'FollowController@getFollowers');
$this->get('followings', 'FollowController@getFollowed');
$this->get('is_following/{type}/{id}', 'FollowController@isFollowing');
$this->get('follow_count/{type}/{member}', 'FollowController@followCount');
/** ========================================================================**/


$this->group(['prefix' => 'faculty'], function () {

    $this->post('login', 'Auth\FacultyAuthController@postLogin');
    $this->post('postEvent', 'FacultyController@postEvent');
    $this->get('logout', 'Auth\FacultyAuthController@logout');

    $this->get('/', 'FacultyController@feed');
    $this->get('subjects', 'FacultyController@getSubject');
    $this->get('getSubjectStudent/{subject}', 'FacultyController@getSubjectStudent');

    $this->post('postLecture', 'FacultyController@postLecture');
    $this->get('getProjects', 'StudentController@getProjects');

});

$this->group(['prefix' => 'university'], function () {


    /**
     * All Reques to University PAge
     */
    $this->get('/', 'GenericController@getUniversity');


    $this->get('profile/{profile_id}', 'UniversityController@universityProfile');
    $this->get('subjects', 'UniversityController@getSubjects');
    $this->get('subject_details/{id}', 'UniversityController@getSubjectDetails');
    $this->get('course_details/{id}', 'UniversityController@getCourseDetails');
    $this->get('university_members', 'UniversityController@getMembers');
    $this->get('members_details/{department}', 'UniversityController@getMemberDetails');
    $this->get('course_details/{id}', 'UniversityController@getCourseDetails');

    $this->get('login', 'Auth\UniversityAuthController@showLoginForm');
    $this->post('login', 'Auth\UniversityAuthController@login');
    $this->get('logout', 'Auth\UniversityAuthController@logout');


    // Password Reset Routes...
    $this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
    $this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
    $this->post('password/reset', 'Auth\PasswordController@reset');
    $this->post('postCourseLecture', 'UniversityController@postCourseLecture');

    $this->post('registerUniversity', 'UniversityController@registerUniversity');
    $this->post('inviteStudent', 'UniversityController@inviteStudent');
    $this->post('inviteFaculty', 'UniversityController@inviteFaculty');
    $this->post('inviteAdmin', 'UniversityController@inviteAdmin');
    $this->post('addSubject', 'UniversityController@postSubject');
});

$this->group(['prefix' => 'backoffice'], function () {

    $this->get('/', 'Admin\AdminController@index');

    // Authentication Routes...
    $this->get('login', 'Admin\AdminAuthController@showLoginForm');
    $this->post('login', 'Admin\AdminAuthController@postLogin');
    $this->get('logout', 'Admin\AdminAuthController@logout');

    //Registration Routes...
    $this->get('register', 'Admin\AdminAuthController@showRegistrationForm');
    $this->post('register', 'Admin\AdminAuthController@register');

    //Password Reset Routes...
    $this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
    $this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
    $this->post('password/reset', 'Auth\PasswordController@reset');


    $this->get('getUniversities', 'Admin\AdminController@getUniversities');
    $this->post('addDepartment', 'Admin\AdminController@postDepartment');
    $this->post('addSubject', 'Admin\AdminController@addSubject');
    $this->post('createUniversity', 'Admin\AdminController@createUniversity');
    $this->get('verifyUniversity/{id}', 'Admin\AdminController@verifyUniversity');

});

$this->get('index', function(){

    foreach (University::all() as $university)
    {
        $university->pushToIndex();
    }

    foreach (Student::all() as $student)
    {
        $student->pushToIndex();
    }

    foreach (Note::all() as $note)
    {
        $note->pushToIndex();
    }

    foreach (Topic::all() as $topic)
    {
        $topic->pushToIndex();
    }

    foreach (Event::all() as $event)
    {
        $event->pushToIndex();
    }

//    foreach (Project::all() as $project)
//    {
//        $project->pushToIndex();
//    }
});

$this->get('test', function () {

   
//
//    $client = new GuzzleHttp\Client(['headers' => ['application-Key' => SEND_OTP_KEY]]);
//
//        $res = $client->request('POST', 'https://sendotp.msg91.com/api/generateOTP',
//        ['json' => ['countryCode' => 91, 'mobileNumber' => 9945195716, 'getGeneratedOTP' => true]]);
//
//        $data = json_decode((string)$res->getBody());
//
//        if($data->status == "success")
//        {
//           return  $data->response->oneTimePassword;
//        }
  //  session(['otp_requested_approved' => 'otp_requested_approved']);

        
return  (int) session()->has('otp_requested_approved');//view('layouts.university.members');





});


