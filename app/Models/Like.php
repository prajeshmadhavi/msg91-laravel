<?php

namespace App\Models;


use App\Traits\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{

    use Notifiable;

    protected $table = 'likes';

    protected $fillable = [

        'likeable_id',
        'likeable_type',
        'liker_id',
        'liker_type'
    ];
    
    protected $casts = ['likeable_id' => 'int', 'liker_id' => 'int'];
    
    protected $with = ['liker', 'likeable'];

    protected $appends = ['type'];

    public function likeable()
    {
        return $this->morphTo();
    }

    public function liker()
    {
        return $this->morphTo();
    }


    public function getTypeAttribute()
    {
        return "like";
    }
}
