@extends('layout')

@section('wall')
@endsection
@section('content')
@auth
<div class="">
  <a href="{{ route('reviews.create')}}" class="btn btn-outline-secondary float-right">New Post</a>
</div>
@endauth
<div class="title-container">
  <h1 class="rev">Reviews</h1>
  <p class="float-left">All Reviews</p>
  <div class="float-right">
    @foreach($tag_lists as $tag_list)
    <a href="{{ action('Tag_listsController@index',[$tag_list->id])}}">{{ $tag_list->name}} /</a>
    @endforeach
  </div>


</div>



<div class="container py-4">
  @if(session('message'))
  <div class="alert alert-success">
    {{ session('message')}}

  </div>
  @endif
</div>
<div class="row ">
  @foreach($reviews as $review)
  <article class="col-md-4 pt-3">

    <h2> <a href="{{ url('reviews',$review->id)}}" class="text-black-50 h5 text-decoration-none text-center">
         <div class="image mx-auto" style="width:200px;">
          <img src="/images/{{ $review->image }}" alt="" class="images">
        </div>
        <h5 class="pt-3">{{ $review->title}} /{{ $review->artist}}<br>
          <h6 class="star">Rate: {{ $review->rate }} @include('reviews.rate',['a' => $review->rate])</h6>
          <h6>{{ $review->created_at}}</h6>
        <div class="mx-auto " style="width:70px">
          <button type="button" name="button" class="btn btn-outline-secondary" style="">view</button>
        </div>  </a> </h2>

  </article>

  @endforeach
</div>

<div class="py-4">
  {{ $reviews->links()}}
</div>


@endsection
