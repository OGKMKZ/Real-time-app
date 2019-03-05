<?php

namespace App\Http\Controllers;

use App\Like;
use Illuminate\Http\Request;
use App\Reply;
use Symfony\Component\HttpFoundation\Response;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('JWT');
    }
    public function likeIt(Reply $reply)
    {
        $reply->likes->create([
            'user_id' => 1
            // 'user_id' => auth()->id
        ]);
        return response('Like succesfully added', Response::HTTP_OK);
    }

    public function unlikeIt(Reply $reply)
    {
        // $reply->like->where('user_id', auth()->id)->first();
        $reply->like->where('user_id', 1)->first();
        return response("Like succesfully deleted", Response::HTTP_OK);
    }
}
