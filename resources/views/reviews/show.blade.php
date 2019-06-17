@extends('layout')

@section('content')

<div class="title-container py-4">
  <h1>{{ $review->title}}/{{ $review->artist}}<p class="float-right h6 post-user">Post User: {{ $post_user->name}} </p></h1>
  <p>Review show</p>
</div>
<div class="container py-4">
  @if(session('message'))
  <div class="alert alert-success">
    {{ session('message')}}

  </div>
  @endif

<article class="row">
<div class="image col-lg-5 pl-4">
  <img src="/images/{{ $review->image }}" alt="">
</div>


  <div class="body py-5 col-lg-6">
    <div class="">
      <p>Rate:  {{ $review->rate }} point @include('reviews.rate',['a' => $review->rate])</p>

    </div>
      {{ $review->body}}
  </div>

</article>

<div class="container row">
  <div class="tags pt-3 col-md-5" >
    @unless ($review->tags->isEmpty())
    <h5>Categorys:</h5>
    <ul>
      @foreach($review->tags as $tag)
      <li>{{ $tag->name }}</li>
      @endforeach
    </ul>
    @endunless
  </div>

  <div class="tags pt-3 col-md-7">

    <h5>Comments:</h5>
      @unless ($view_comments->isEmpty())
    <ul>
      @foreach($view_comments as $view_comment)
      <li>{{ $view_comment->user_name }}:<br> {{ $view_comment->body }}
         {!! Form::open(['method' => 'DELETE','url'=> ['comment',$view_comment->id],'class' => 'd-inline'])!!}
          {!! Form::submit('Delete',['class' => 'btn btn-outline-danger'])!!}
        {!! Form::close() !!} </li>
      @endforeach
    </ul>
    @endunless
  </div>

</div>



<div class="form-group">
  {!! Form::open(['url'=> ['comment',$review->id]])!!}
</div>
  <div class="form-group">
  {!! Form::label('body','Post-Comment:')!!}
  {!! Form::textarea('body',null,['class' => 'form-control'])!!}
  </div>
  <div class="form-group d-none">
  {!! Form::number('review_id',$review->id,['class' => 'form-control'])!!}
  </div>
  @if(Auth::check())
  <div class="form-group d-none">
  {!! Form::text('user_name',$user->name,['class' => 'form-control'])!!}
  </div>
  @else
  <div class="form-group d-none">
  {!! Form::text('user_name','guest user',['class' => 'form-control'])!!}
  </div>
  @endif
    <div class="form-group">
  {!! Form::submit('comment',['class' => 'btn btn-outline-secondary mt-3 form-control'])!!}
</div>
  {!! Form::close()!!}

</div>


@if($user)
<div class="py-2">
  @if($user->id == $review->user_id)
  <a href="{{ action('ReviewsController@edit',[$review->id])}}"class="btn btn-outline-secondary ">Edit</a>
  @endif
  <a href="{{ url('reviews')}}"class="btn btn-outline-secondary float-right mr-5">Back</a>
</div>
@if($user->id == $review->user_id)
  <div class="">
  {!! Form::open(['method' => 'DELETE','url'=> ['reviews',$review->id],'class' => 'd-inline'])!!}
    {!! Form::submit('Delete',['class' => 'btn btn-outline-danger'])!!}
  {!! Form::close() !!}
  </div>
 @endif
@endif
<div class="py-2">

</div>

@endsection
