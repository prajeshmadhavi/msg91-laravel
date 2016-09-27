<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'quizzes';

    protected $fillable = [

        'assignment_id',
        'question',
    ];

    protected $casts = [
        'assignment_id' => 'int'
    ];
    
    protected $with = ['options'];

    public function assignment()
    {
        return $this->belongsTo(Assignment::class);
    }

    public function options()
    {
        return $this->hasMany(QuizOption::class);
    }


}
