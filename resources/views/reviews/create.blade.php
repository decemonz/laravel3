@extends('layout')

@section('content')
<h1>Write a New Review</h1>


@include('.reviews.errors')

{!! Form::open(['url' => 'reviews', 'files' => true]) !!}
 @include('reviews.form',['submitButton' => '作成','published_at' => date('Y-m-d')])
{!! Form::close() !!}



@endsection
