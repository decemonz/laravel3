<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRequest;
use Intervention\Image\ImageManagerStatic as Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $user = User::find(auth()->id());
        return view('home',compact('user'));
    }

    public function show(){
      $user = User::find(auth()->id());
      $reviews = Auth::user()->reviews();
        return view('profile',compact('user','reviews'));
    }
    public function edit(){
      $user = User::find(auth()->id());
        return view('edit_prof',compact('user'));
    }
    public function update(UserRequest $request){
        $user = User::find(auth()->id());

        $file = $request->file('image');
        $fileName=str_random(20).'.'.$file->getClientOriginalExtension();
        Image::make($file)->resize(300,300)->save(public_path('images/'.$fileName));


        $user->update($request->validated());
        $user->image=$fileName;
        $user->save();



        return redirect(url('profile'));

    }


}
