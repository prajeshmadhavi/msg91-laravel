<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{

    protected $table = 'notifications';

    protected $fillable = [

        'notification_type',
        'notification_id',
        'user_type',
        'user_id',
        'is_viewed'
    ];

    protected $casts = ['notification_id' => 'int', 'user_id' => 'int', 'is_viewed' => 'boolean'];

    protected $with = ['notification'];

    protected $appends = ['type', 'time'];

    public function notification()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->morphTo();
    }

    public function getTypeAttribute()
    {
        return $this->notification->type;
    }

    /**
     * Get & Cast Created_At to Readable TimeAgo
     * @param $value
     * @return mixed
     */
    public function getTimeAttribute()
    {
        return to_timeline($this->created_at);
    }


}
