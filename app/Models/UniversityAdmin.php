<?php

namespace App\Models;

use App\Traits\Followable;
use App\Traits\Postable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class UniversityAdmin extends Member
{

    use Followable, Postable;

    protected $table = 'university_admins';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [

        'name',
        'email',
        'avatar',
        'password',
        'university_id',
        'is_verified'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['university'];

    protected $appends = ['my_university'];

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public static function persist($request, $university)
    {
        $data = $request->all();
        $password = str_random(10);
        $data['password'] = bcrypt($password);
        $data['university_id'] = $university->id;
        Log::info($password);
        if ($admin = UniversityAdmin::create($data)) {
            sendMail($admin->email, "mails.invite_student", "Hi " . $admin->name . ", You've been invited by " . $university->name, [$admin->email, $password, $university->name]);
        }
        return $admin;

    }


    public function getTypeAttribute()
    {
        return 'admin';
    }

    public function getMyUniversityAttribute()
    {
        return $this->university()->getResults()->name;
    }


}
