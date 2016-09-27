<?php namespace App\Models;

use App\Traits\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{

    use Notifiable;

    protected $table = "followers";

    protected $fillable = [

        'follower_id',
        'follower_type',
        'followed_id',
        'followed_type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    
    protected $casts = [

        'follower_id' => 'int',
        'followed_id' => 'int',
    ];


    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['follower', 'followed'];

    /**
     *
     * @return mixed
     */

    public function follower()
    {
        return $this->morphTo();
    }

    /**
     * @return mixed
     */
    public function followed()
    {
        return $this->morphTo();
    }

    public function getTypeAttribute()
    {
        return "follow";
    }

    
}