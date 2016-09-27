<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 18/07/16
 * Time: 9:07 AM
 */

namespace App\Contracts;


use App\Models\Faculty;
use App\Models\Note;
use App\Models\Topic;
use App\Repositories\NoteRepository;

class PostFilterImpl
{


    public function filterByTag()
    {

    }

    public function filterByUniversity($university_id)
    {
        $notes = Note::all();
        $topics = Topic::all();
        $updates = collect([$notes, $topics]);
        $merged = $updates->collapse();
        $sorted = $merged->sortBy('updated_at');
        return $sorted->where('poster.university_id', $university_id);
    }

    public function subjectUpdate($faculty_id, $subject_id)
    {
        $notes = $this->notesByFaculty();
        $notes = $notes->where('subject_id', $subject_id);
        return $notes;
    }

    public function universityLibraries($university)
    {
        $posts = collect([$this->postsByAdmin($university), $this->postsByFaculty($university)])->flatten();
        $libraries = $posts->where('post_type', 'notes');
        return $libraries;
    }

    public function universityUpdate($university)
    {
        return $this->postsByAdmin($university);
    }

    public function studentLibraries($user)
    {
        $notes = $user->notes;
        return $notes;
    }

    public function studentUpdates($user)
    {
        $updates = collect();
        $notes = $user->notes->load('comments', 'likes');
        $topics = $user->topics->load('comments', 'likes');
        $projects = $user->projects->load('comments', 'likes');
        $updates->push([$notes, $topics, $projects]);
        return $updates->flatten();
    }

    private function notesByStudent()
    {
        $notes = collect();
        foreach (university()->students as $student) {
            $notes->push($student->notes);

        }
        return $notes->flatten();
    }

    private function notesByFaculty()
    {
        $notes = collect();
        foreach (university()->faculty as $faculty) {
            $notes->push($faculty->notes);
        }
        return $notes->flatten();
    }

    private function postsByAdmin($university)
    {
        $posts = collect();
        foreach ($university->admin as $admin) {
            $notes = $admin->notes->load('comments', 'likes');
            $event = $admin->events->load('comments', 'likes');
            $news = $admin->news->load('comments', 'likes');
            $posts->push([$notes, $event, $news]);
        }
        //$posts = $posts->where('privacy', UNIVERSITY);
        return $posts->flatten();
    }

    private function postsByFaculty($university)
    {
        $posts = collect();
        foreach ($university->faculty as $faculty) {

            $notes = $faculty->notes->load('comments', 'likes');;
            $topics = $faculty->topics->load('comments', 'likes');;
            $event = $faculty->events->load('comments', 'likes');;
            $news = $faculty->news->load('comments', 'likes');;
            $projects = $faculty->projects->load('comments', 'likes');;
            $posts->push([$notes, $topics, $event, $news, $projects]);
            //$posts = $posts->flatten();
        }
        //$posts = $posts->where('privacy', UNIVERSITY);
        return $posts->flatten();//Faculty::find(6)->notes->load('comments', 'likes');
    }


}