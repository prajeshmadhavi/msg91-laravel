<?php

namespace App\Models;

use App\Traits\Likeable;
use App\Traits\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    
    use Likeable, Notifiable;
    
    protected $table = 'question_answers';
    
    protected $fillable = [
        
        'body',
        'is_best_answer',
        'topic_id',
        'answerer_id',
        'answerer_type'
    ];
    
    protected $casts =  [

        'is_best_answer' => 'boolean',
        'topic_id' => 'int',
        'answerer_id' => 'int'
    ];

    protected $appends = ['type', 'time'];

    protected $with = ['answerer', 'likes'];

    /**
     * Get & Cast Created_At to Readable TimeAgo
     * @param $value
     * @return mixed
     */
    public function getTimeAttribute()
    {
        return to_timeline($this->created_at);
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
    
    public function answerer()
    {
        return $this->morphTo();
    }

    public function getTypeAttribute()
    {
        return 'answer';
    }


}
