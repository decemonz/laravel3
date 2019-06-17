@extends('layout')
@section('content')

<div class="title-container">
  <h1>Reviews</h1>
  <p class="float-left">{{ $tag->name }} Reviews</p>
  <a href="{{ url('reviews')}}" class="float-right">View All</a>
</div>

<div class="row container">
  @foreach($reviews as $review)
  <article class="col-lg-4 pt-3">

    <h2> <a href="{{ url('reviews',$review->id)}}" class="text-black-50 h5 text-decoration-none text-center">
         <div class="image mx-auto" style="width:200px;">
          <img src="/images/{{ $review->image }}" alt="" class="">
        </div> <h5 class="pt-3">{{ $review->title}} /{{ $review->artist}}<br>
          <h6>create_at:</h6>
          <h6>{{ $review->created_at}}</h6>
        <div class="mx-auto " style="width:70px">
          <button type="button" name="button" class="btn btn-outline-secondary" style="">view</button>
        </div>  </a> </h2>

  </article>

  @endforeach
</div>
@endsection
