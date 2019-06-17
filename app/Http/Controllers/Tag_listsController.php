<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Tag;

class Tag_listsController extends Controller
{
    //
    public function index($id){
    $tag = Tag::findOrFail($id);
    $reviews = $tag->reviews;
   return  view('tag_lists.index',compact('reviews','tag'));

    }
}
