<?php namespace App\Traits;


use App\Exceptions\AlreadyFollowingException;
use App\Exceptions\FollowerNotFoundException;
use App\Exceptions\UnfollowableException;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\Follow;
use App\Models\Student;

trait Followable
{

    private $follower_type;

    private $follower_id;


    /**
     * Follow a Member
     * @param $following_type
     * @param $following_id
     * @return null|static
     * @throws AlreadyFollowingException
     */
    public function follow($following_type, $following_id)
    {
        //Check if the follow conforms to Social University standard
        $this->validateFollow($following_type, $following_id);
        
        //Check if already following the user
        $isFollowing = $this->isFollowing($following_type, $following_id);

        if ($isFollowing !== false) {
            throw new AlreadyFollowingException('This user is already following the ' . $following_type);
        }

        $follow = Follow::create([
            'follower_id' => $this->follower_id,
            'follower_type' => $this->follower_type,
            'followed_id' => $following_id,
            'followed_type' => config('follow.' . $following_type)
        ]);
        if ($follow) {
            return $follow;
        }
        return null;
    }


    /**
     * Unfollow a Member
     * @param $following_type
     * @param $following_id
     * @return string
     * @throws FollowerNotFoundException
     */
    public function unfollow($following_type, $following_id)
    {
        //Checks if the user is being followings
        $following = $this->isFollowing($following_type, $following_id);

        if (!$following) {
            throw new FollowerNotFoundException('Cannot Unfollow User, Not Following !');
        }

        $follow = $this->getFollow($following_type, $following_id);
        Follow::destroy($follow->id);
        return "User Unfollowed";
    }


    /**
     * Get a Follow
     * @param $following_type
     * @param $following_id
     * @return bool
     */

    public function getFollow($following_type, $following_id)
    {
        $follow = $this->followings
            ->where('followed_id', (int)$following_id)
            ->where('followed_type', config('follow.' . $following_type))
            ->first();
        if (is_null($follow)) {
            return [];
        }
        return $follow;
    }


    /**
     * Checks if the current Member follows a user
     * @param $following_type
     * @param $following_id
     * @return bool
     */

    public function isFollowing($following_type, $following_id)
    {
        $following = $this->followings
            ->where('followed_id', (int)$following_id)
            ->where('followed_type', config('follow.' . $following_type))
            ->first();
        if (is_null($following)) {
            return false;
        }
        return true;
    }


    /**
     * Checks if the current Member is followings by a user
     * @param $follower_type
     * @param $follower_id
     * @return bool
     */
    public function isFollowedBy($follower_type, $follower_id)
    {
        $following_by = $this->followers
            ->where('follower_id', (int)$follower_id)
            ->where('follower_type', config('follow.' . $follower_type))
            ->first();
        if (is_null($following_by)) {
            return false;
        }
        return true;
    }


    /**
     * Lists all followers of the current user by Member
     * @return mixed
     */
    public function getFollowers()
    {
        $followers = collect();
        if($this->followers->count() > 0)
        {
            foreach ($this->followers as $follower)
            {
                $class = $follower->follower_type;
                $object = new $class();
                $followers->push($object->find($follower->follower_id));
            }
        }
        return $followers;
    }


    /**
     * Lists all followings of the current user by Member
     * @return mixed
     */
    public function getFollowing()
    {
        $following = collect();
        if($this->followings->count() > 0)
        {
            foreach ($this->followings as $followed)
            {
                $class = $followed->followed_type;
                $object = new $class();
                $following->push($object->find($followed->followed_id));
            }
        }
        return $following;
    }


    /**
     * Get a followings Member from a following
     * @param $follow
     * @return mixed
     */
    public function getFollowed($follow)
    {
        $class = $follow->followed_type;
        $object = new $class();
        $user = $object->find($follow->followed_id);
        return $user;
    }

    /**
     * Get a follower Member from a following
     * @param $follow
     * @return mixed
     */
    public function getFollower($follow)
    {
        $class = $follow->follower_type;
        $object = new $class();
        $user = $object->find($follow->follower_id);
        return $user;
    }

    /**
     *  Set the current follower model attribute
     */
    public function setFollower()
    {
        $this->follower_type = get_class(user());
        $this->follower_id = $this->id;
    }

    /**
     * Number of followers
     * @return mixed
     */
    public function followers_count()
    {
        return $this->followers->count();
    }

    /**
     * Validate the follow process
     * @param $type
     * @param $id
     * @return bool
     * @throws UnfollowableException
     */
    protected function validateFollow($type, $id)
    {
        $id = (int) $id;
        switch ($type) {
            case "department" :

                if (! $this->department === Department::find($id)) {
                    throw new UnfollowableException("Cannot follow Departments than yours");
                }
                break;

            case "student" :
                if (! $this->department === Student::find($id)->department) {
                    throw new UnfollowableException("Cannot follow Students of other departments");
                }
                break;

            case "faculty" :
             $faculty = Faculty::find($id)->where('university_id', $this->university->id)
                                  ->department
                                  ->where('department_id', $this->department->id)
                                  ->fisrt();
                if (! $faculty ) {
                    throw new UnfollowableException("Cannot follow Faculties of other Universities/Departments");
                }
                break;

            default :
                return true;
            break;
        }
        return false;
    }


    /**
     * Lists all followers of the current Member
     * @return mixed
     */
    public function followers()
    {
        return $this->morphMany(Follow::class, 'followers','followed_type', 'followed_id');
    }

    /**
     * Lists all followings Users by the current Member
     * @return mixed
     */
    public function followings()
    {
        return $this->morphMany(Follow::class, 'followers', 'follower_type', 'follower_id');
    }

}