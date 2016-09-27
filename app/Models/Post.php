<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 12/07/16
 * Time: 12:49 PM
 */

namespace App\Models;


use App\Contracts\TimeLineFeed;
use App\Traits\Commentable;
use App\Traits\Likeable;
use App\Traits\Taggable;
use Illuminate\Database\Eloquent\Model;

abstract class Post extends Model  implements TimeLineFeed
{

    use Commentable, Likeable, Taggable;

    /**
     * Append attributes to query when building a query.
     * @var array
     */
    protected $appends = [ 'type', 'time', 'poster_name'];

    /**
     * Get & Cast Time to Readable TimeAgo
     * @param $value
     * @return mixed
     */

    public function getTimeAttribute()
    {
        return to_timeline($this->created_at);
    }


    public function getPosterNameAttribute()
    {
        return $this->poster()->getResults()->name;
    }

    /**
     *  Note Poster
     * @return mixed
     */
    public function poster()
    {
        return $this->morphTo();
    }

    abstract function getTypeAttribute();



}