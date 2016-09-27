<?php
/**
 * Created by PhpStorm.
 * User: jide
 * Date: 27/07/16
 * Time: 7:40 AM
 */

namespace App\Contracts;


use App\Models\Member;
use App\Models\News;


class Statistics
{

    protected $coursesRepository;

    protected $newsRepository;

    protected  $eventsRepository;

    /**
     * Statistics constructor.
     * @param $coursesRepository
     * @param $newsRepository
     * @param $eventsRepository
     */
    public function __construct()
    {

    }


    public function getCollegeStat()
    {

    }


    private function collegeNewsStat()
    {
        $newsCount = 0;
        $universityNews = News::all()->where('poster.university_id', university()->id);
        foreach ($universityNews as $news)
        {
            $newsCount += $news->commnents->count();
        }
        return $newsCount;
    }

    private function membersFollowersCount()
    {
        $followCount = 0;
        $member = new Member();
        $members = $member->allMembers();
        foreach ($members as $member)
        {
            $followCount += $member->followers_count();
        }
        return $followCount;
    }

}