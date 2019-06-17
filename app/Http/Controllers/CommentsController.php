<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Http\Requests\CommentRequest;
use App\Review;
use Illuminate\Support\Facades\Auth;
use App\User;

class CommentsController extends Controller
{
    //
    public function store($id){
      $review = Review::findOrFail($id);
      $inputs = \Request::all();
      $user =  Auth::user();

      $comment =  Comment::create($inputs);
      $view_comments  = $review->comments;

      $user_id = $review->user_id;
      $post_user = User::findOrFail($user_id);

      return view('reviews.show',compact('comment','review','user','view_comments','post_user'))->with('message','コメントしました');

    }

    public function destroy($id){
    $comment = Comment::findOrFail($id);
    $comment->delete();
    return redirect('reviews')->with('message','コメントを削除しました。');

    }
}
