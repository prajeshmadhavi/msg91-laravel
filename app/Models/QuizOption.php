<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizOption extends Model
{
    protected $table = 'quiz_options';

    public $timestamps = false;

    protected $fillable = [

        'quiz_id',
        'option',
        'is_correct'
    ];
    
    protected $casts =[

        'quiz_id' => 'int',
        'is_correct' => 'boolean'
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
    
    public function answer()
    {
        return $this->belongsToMany(QuizAnswer::class, 'student_quiz_answers', 'option_id', 'answer_id');
    }
}
