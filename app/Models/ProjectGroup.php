<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class ProjectGroup extends Model
{
protected $table = 'project_groups';

    protected $fillable = [
     	'id',
        'project_id',
        'project_poster_type',
        'project_poster_id',
        'group_member_id'

    ];

     public function project()
    {
        return $this->belongsTo(Project::class);
    }
}