@extends('layout')
@section('content')

<div class="container">
  <h3>User Name :{{ $user->name }}</h3>

@foreach($reviews as $review)
{{ $review->body }}
@endforeach

</div>

<a href="{{ route('edit_prof')}}" class="btn btn-danger">Edit</a>

@endsection
