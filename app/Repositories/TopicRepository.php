<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 03/07/16
 * Time: 12:14 PM
 */

namespace App\Repositories;


use App\Contracts\Crud;
use App\Events\OnFeedUpdatedEvent;
use App\Facades\Tagger;
use App\Models\Student;
use App\Models\Tag;
use App\Models\Topic;
use Event;
use Illuminate\Contracts\Validation\UnauthorizedException;

class TopicRepository extends Crud
{

    protected $model;

    /**
     * ForumRepository constructor.
     * @param $model
     */
    public function __construct(Topic $model)
    {
        $this->model = $model;
    }

    public function store($request)
    {
        $data = $request->all();
        $question = user()->topics()->create([
            'title' => $data['title'],
            'description' => $data['description'],
            'privacy' => $data['privacy']
        ]);

        if ( $request->has('tags') && count($request->get('tags')) > 0  )
        {
            Tagger::tagMembers($request->get('tags'), $question);
        }

        Event::fire(new OnFeedUpdatedEvent($question));

        return $question;
    }

    public function answer($request)
    {
        $topic = $this->getById($request->get('topic'));
        $answer = $topic->answers()->create(['body' => $request->get('body')]);
        user()->answers()->save($answer);
        $answer->answerer()->associate(user());
        return $answer;
    }

    public function markBestAnswer($best_answer, $topic)
    {
        $best_answer_id = $best_answer;
        $topic = $this->getById($topic);
        if ($topic->poster_id != user()->id) {
            throw new UnauthorizedException();
        }

        foreach ($topic->answers as $answer) {

            if ($answer->id != $best_answer_id) {
                $answer->update(['is_best_answer' => false]);
            }

            if ($answer->id == $best_answer_id) {
                $answer->update(['is_best_answer' => true]);
                $best_answer = $answer;
            }
        }
        //Todo BroadCast Event to Answerer
        //event(new QuestionAnswered($topic));
        return $best_answer;
    }

    public function getTopics()
    {
        $privates = user()->topics->where('privacy', ONLY_ME)->get();
        $non_privates = $this->getAll('privacy', '!=', ONLY_ME);
        $non_privates->where('poster.university_id', university()->id);
    }

    public function withPrivacy()
    {
        $all_topics = $this->getAll(['answers', 'likes']);
        $department_id = is_student() ? user()->department_id : user()->department->first()->id;
        $only_me = $all_topics->where('privacy', ONLY_ME)->where('poster_id', user()->id)->where('poster_type', get_class(user()));
        $everyone = $all_topics->where('privacy', EVERYONE);
        $university = $all_topics->where('privacy', UNIVERSITY)->where('poster.university_id', user()->university_id);

        //Private to Department
        $department = collect();

        foreach ($all_topics->where('privacy', DEPARTMENT) as $note)
        {

            if($note->poster->type == 'student')
            {
                $department = $all_topics->where('poster.department_id', $department_id);
            }

//            if($note->poster->type == 'faculty')
//            {
//                $department = $note->where('poster.department', $department_id);
//            }
//
//            if($note->poster->type == 'admin')
//            {
//                $department = $this->getAll()->where('poster.department_id', $department_id);
//            }
//
//            $department = $department->collapse();
        }

        return array_merge([$only_me, $everyone, $university, $department]);
    }

}