<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use App\Review;
use App\Http\Requests\ReviewRequest;
use App\Tag;
use App\User;



class ReviewsController extends Controller
{

    // public function __construct(){
    //   $this->middleware('redirect')->except(['index','show','create','store',]);
    // }

    public function index(){
      $tag_lists = Tag::all();
      $reviews = Review::latest('published_at')->latest('created_at')->published()->paginate(6);
      return view('reviews.index',compact('reviews'),compact('tag_lists'));
    }
    public function create(){
      $tag_list = Tag::pluck('name','id');
      return view('reviews.create',compact('tag_list'));
    }
    public function store(ReviewRequest $request){
      // Review::create($request->validated());
      $file = $request->file('image');
      $fileName=str_random(20).'.'.$file->getClientOriginalExtension();
      Image::make($file)->resize(200,200)->save(public_path('images/'.$fileName));


      $review = Auth::user()->reviews()->create($request->validated());
      $review->image=$fileName;
      $review->save();
      $review->tags()->attach($request->input('tags'));



      // if($request->file()->isValid([])){
      //   $filename = $request->image->store('public/images');
      //
      //   $review = Review::all()
      //   $review->image = basename($filename);
      //   $review->save();
      //
      // }
      return redirect('reviews')->with('message','記事を作成しました。');

    }
    public function show(Review $review){
      $user = Auth::user();

      $user_id = $review->user_id;
      $post_user = User::findOrFail($user_id);

      $view_comments  = $review->comments;

      return view('reviews.show',compact('review','user','post_user','view_comments'));
    }
    public function destroy(Review $review){
      $review->delete();
      return redirect('reviews')->with('message','記事を削除しました。');

    }
    public function edit(Review $review){
        $tag_list = Tag::pluck('name','id');
        return view('reviews.edit',compact('review','tag_list'))->with('message','記事を更新しました.');
    }
    public function update(ReviewRequest $request,Review $review){
        $review->update($request->validated());
        // $review->tags()->sync($review->input('tags'));
        return redirect(url('reviews',[$review->id]));
    }

}
