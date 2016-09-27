<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    protected $fillable = [

        'post_type',
        'post_id',
        
        'tagged_type',
        'tagged_id',
    ];

    protected $casts = [

        'post_id' => 'int',
        'tagged_id' => 'int',
    ];
    
    protected $with = ['tagged'];

    
    public function post()
    {
        return $this->morphTo();
    }

    /**
     * Get all Tagged Members
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function tagged()
    {
        return $this->morphTo();
    }

    
    
}
