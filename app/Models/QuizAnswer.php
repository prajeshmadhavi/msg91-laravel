<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizAnswer extends Model
{
    protected $table = 'quiz_answers';

    protected $fillable = [

        'student_id',
        'quiz_id',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function quiz()
    {
        return $this->belongsToMany(Quiz::class);
    }

    public function option()
    {
        return $this->belongsToMany(QuizOption::class, 'student_quiz_answers', 'option_id', 'answer_id');
    }

    
}
