<?php

namespace App\Http\Middleware;

use Closure;
use App\Review;
use Illuminate\Support\Facades\Auth;


class MyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      $id = $request->route()->parameter('id');
      $review = Review::findOrFail($id);
      $user = Auth::user();
       if($user->id != $review->user_id){

         return redirect(route('reviews.index'));
       }
    }
}
