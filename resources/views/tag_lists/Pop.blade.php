@extends('layout')
@section('content')
@auth
<div class="">
  <a href="{{ route('reviews.create')}}" class="btn btn-danger float-right">New Post</a>
</div>
@endauth
<div class="title-container">
  <h1>Reviews</h1>
  <p class="float-left">All Reviews</p>
  <div class="float-right">
    @foreach($tag_lists as $tag_list)
    <a href="{{ url('tag_lists')}}">{{ $tag_list->name}} /</a>
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
<div class="row">
  @foreach($reviews as $review)
  <article class="col-lg-4 py-4">

    <h2> <a href="{{ url('reviews',$review->id)}}" class="text-black-50 h4">
         <div class="image mx-auto" style="width:300px;">
          <img src="/images/{{ $review->image }}" alt="">
        </div> {{ $review->title}} / {{ $review->artist}}</a> </h2>

  </article>

  @endforeach
</div>

<div class="py-4">
  {{ $reviews->links()}}
</div>


@endsection
