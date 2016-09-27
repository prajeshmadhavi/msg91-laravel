<?php
use App\Models\Department;
use App\Models\Student;
use App\Models\Subject;
use Carbon\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Stringy\Stringy;

/**
 * Created by PhpStorm.
 * User: jide
 * Date: 21/04/16
 * Time: 9:08 AM
 */

const ONLY_ME = 'only_me';
const EVERYONE = 'everyone';
const DEPARTMENT = 'department';
const UNIVERSITY = 'university';
const FOLLOWERS = 'followers';
const UPLOAD_URL = 'https://s3-us-west-2.amazonaws.com/social-university/uploads/';
const SEND_OTP_KEY = "h_XyS2LWiELnANrIKoboBGRXZ-hR4X8pxkk7IIhO_PnFN-HlARjLn-cGEsv2hZc9VBlyWSm2A9TaQDLzj2gejpEwfALCFq82uNDYjIFhLD5z5V1WfpwuK6ZYhbWZopX2tUeTpEWe5MSVFygr4yVbZQ==";


function persistImage($file)
{
    $directory_name = 'public/' . md5(user()->email);
    $file_name = str_random(50) . '.' . $file->guessClientExtension();
    Storage::put($directory_name . '/' . $file_name, file_get_contents($file->getRealPath()));
    return $directory_name . '/' . $file_name;
}

function persistFile($file, $folder, $request, $key)
{
    $extension = '.' . $file->guessClientExtension();
    $file_name = str_random(50) . $extension;
    $request->file($key)->move(public_path('uploads/' . $folder . '/'), $file_name);
    return '/uploads/' . $folder . '/' . $file_name;
}


function upload_path()
{
    return 'uploads/' . md5(user()->email);
}


function assets($path, $secure = null)
{
    return app('url')->asset('assets/' . $path, $secure);
}


function gender()
{
    return ['male', 'female'][random_int(0, 1)];
}

function is_same_dept($other)
{
    return user()->department->id === $other->department->id;
}

function unique_file_name($file)
{
    return str_random(6) . '@' . $file->getClientOriginalName();
}

function to_timeline($carbon_date)
{
    return Carbon::parse($carbon_date)->diffForHumans();
}

function arr_to_int($string)
{
    return (int)$string;
}

function is_student()
{
    return auth()->guard('student')->check();
}

function is_faculty()
{
    return auth()->guard('faculty')->check();
}

function is_university()
{
    return auth()->guard('university')->check();
}

function get_guard()
{
    return config('auth.defaults')['guard'];
}

function fac_or_std()
{
    return auth()->guard('faculty')->check() ? 'faculty' : '';
}

function format_follows($followers)
{
    return $followers > 1 ? $followers . ' Followers' : $followers . ' Follower';
}

function is_self($student)
{
    return $student->university->id === user()->university->id && $student->id === user()->id;
}

function user()
{
    if (auth()->guard('student')->check()) {
        return auth()->guard('student')->user();
    }
    if (auth()->guard('faculty')->check()) {
        return auth()->guard('faculty')->user();
    }
    if (auth()->guard('university')->check()) {
        return auth()->guard('university')->user();
    }

}

function user_type()
{
    if (auth()->guard('student')->check()) {
        return 'student';
    }
    if (auth()->guard('faculty')->check()) {
        return 'faculty';
    }
    if (auth()->guard('university')->check()) {
        return 'university';
    }
    if (auth()->guard('admin')->check()) {
        return 'admin';
    }
}


function reset_token()
{
   return \Password::getRepository()->create( user() );
}

function university()
{
    return user()->university;
}

function mult_arr_to_one($data)
{
    $new_data = [];
    foreach ($data as $key => $value) {
        $new_data = $value;
    }

    return $new_data;
}


function year_month()
{
    $year = Carbon::now()->year;
    return [
        'January, ' . $year => 'Jan ' . $year,
        'February, ' . $year => 'Feb ' . $year,
        'March, ' . $year => 'Mar ' . $year,
        'April, ' . $year => 'Apr ' . $year,
        'May, ' . $year => 'May ' . $year,
        'June, ' . $year => 'Jun ' . $year,
        'July, ' . $year => 'Jul ' . $year,
        'August, ' . $year => 'Aug ' . $year,
        'September, ' . $year => 'Sept ' . $year,
        'October, ' . $year => 'Oct ' . $year,
        'November, ' . $year => 'Nov ' . $year,
        'December, ' . $year => 'Dec ' . $year
    ];
}

function attendance_pass_fail($total, $aggregate)
{
    if ($aggregate >= ($total / 2)) {
        return "border-pass";
    }
    return "border-fail";
}

function attendance_percentage($total, $attended)
{
    return ($total / 100) * $attended . '%';
}

function result_pass_or_fail($pass_mark, $scored)
{
    return $scored >= $pass_mark ? "completed" : "poor";
}

function assignment_status($assignment)
{

    if ($assignment->pivot->approved) {
        return 'completed';
    }
    if ($assignment->pivot->completed) {
        return 'c-blue';
    }

    return '';
}

function print_assignment_status($assignment)
{

    if ($assignment->pivot->approved) {
        return 'APPROVED';
    }
    if ($assignment->pivot->completed) {
        return 'COMPLETED';
    }

    return 'PENDING';
}


function string_replace($string, $search, $replace)
{
    return Stringy::create($string)->replace($search, $replace);
}

function decode_base64($data)
{
    return base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $data));
}

function enrolled($subject)
{
    return $subject->students->where('university_id', user()->university->id)
        ->count();
}

function std_id($phone)
{
    return 'su@' . substr(md5($phone), 0, 8);
}

function base64_extn($string)
{
    if (strpos($string, 'png') !== false) {
        return '.png';
    }
    if (strpos($string, 'jpeg') !== false) {
        return '.jpeg';
    }
    if (strpos($string, 'jpg') !== false) {
        return '.jpg';
    }
    if (strpos($string, 'gif') !== false) {
        return '.gif';
    }
}

function getModel($model)
{
    $class = 'App\Models\\' . Stringy::create($model)->toTitleCase();
    return new $class();
}

function getClass($name)
{
    return 'App\Models\\' . Stringy::create($name)->toTitleCase();
}

//Todo Remove DB Operation functions

function getSubjects()
{
    return Subject::all(['id', 'name'])->pluck('name', 'id');
}


function getMyDepartmentStudent($student_id)
{
    $student = Student::find($student_id);
    if ($student) {
        $department = $student->department;
        return $department->student->pluck('name', 'id');
    }
}

function my_department_subjects($student_id)
{
    $student = Student::find($student_id);
    $department = $student->department;
    return $department->subject->pluck('name', 'id');
}


function getDepartments()
{
    return Department::all(['id', 'name'])->pluck('name', 'id');
}


//Todo Remove DB Operation functions

function sendMail($recipient, $view, $subject, $data)
{
    $sender = 'no-reply@socialuniversity.in';
    $name = 'Social University';

    $from = ['address' => $sender, 'name' => $name];

    Config::set('mail.from', $from);

    Mail::queue($view, ['data' => $data], function ($message) use ($recipient, $subject) {
        $message->to($recipient)
            ->subject($subject);
    });
}



