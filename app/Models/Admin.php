<?php

namespace App\Models;

use App\Models\Member;
use App\Models\University;
use Illuminate\Database\Eloquent\Model;

class Admin extends Member
{
    protected $table = 'admins';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name',
        'email',
        'is_active',
        'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



}
