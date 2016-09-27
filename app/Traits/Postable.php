<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 13/08/16
 * Time: 2:44 PM
 */

namespace App\Traits;


use App\Models\Event;
use App\Models\News;
use App\Models\Note;
use App\Models\Project;
use App\Models\Topic;

trait Postable
{

    public function notes()
    {
        return $this->morphMany(Note::class, 'poster');
    }

    public function projects()
    {
        return $this->morphMany(Project::class, 'poster');
    }

    public function news()
    {
        return $this->morphMany(News::class, 'poster');
    }

    public function topics()
    {
        return $this->morphMany(Topic::class, 'poster');
    }

    public function events()
    {
        return $this->morphMany(Event::class, 'poster');
    }

    public function posts()
    {
        $post = collect();
        $post->push($this->notes, $this->projects, $this->news, $this->events, $this->topics)->flatten();
       return $post->flatten();
    }

}