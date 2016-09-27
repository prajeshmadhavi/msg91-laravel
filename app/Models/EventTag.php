<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventTag extends Model
{
    protected $table = 'event_tags';

    protected $fillable = [

        'id',
        'event_id',
        'tagger_type',
        'tagger_id',
        'taggee_id',

    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
