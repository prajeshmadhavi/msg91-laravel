<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 6/29/16
 * Time: 6:01 AM
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class QuestionTag extends Model
{
    protected $table = 'question_tags';

    protected $fillable = [

        'id',
        'question_id',
        'tagger_type',
        'tagger_id',
        'taggee_id',

    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    
    

}