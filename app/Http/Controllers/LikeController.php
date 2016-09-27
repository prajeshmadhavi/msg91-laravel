<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Repositories\NotificationRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class LikeController extends Controller
{

    protected $notificationRepository;

    /**
     * LikeController constructor.
     * @param NotificationRepository $notificationRepository
     */

    public function __construct(NotificationRepository $notificationRepository)
    {
        $this->middleware(['auth']);
        $this->notificationRepository = $notificationRepository;
    }

    public function like($type, $id)
    {
        $model = getModel($type)->find($id);
        if (!$model) {
            throw new ModelNotFoundException();
        }

        if ($this->is_liked($model)) {

            return $this->unlike($model);
        }

        $like = $model->likes()->create(['liker_id' => user()->id]);
        user()->likes()->save($like);

        $this->notificationRepository->notify($like, $model);

        return $model->likes()->get();
    }

    public function unlike($model)
    {
        $likes = $model->likes->where('liker_id', user()->id)->where('liker_type', get_class(user()))->first();
        $likes->delete();
        return $model->likes()->get();
    }

    public function is_liked($model)
    {
        $liked = $model->likes->where('liker_id', user()->id)->where('liker_type', get_class(user()))->first();
        if ($liked) {
            return true;
        }
        return false;

    }


}
