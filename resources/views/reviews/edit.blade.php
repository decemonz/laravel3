@extends('layout')

@section('content')
<h1>Edit Review</h1>

@include('reviews.errors')

{!! Form::model($review,['method' => 'PATCH','url' =>['reviews',$review->id]]) !!}
 @include('reviews.form',['submitButton' => 'Edit Review','published_at' => $review->published_at->format('Y-m-d')])
{!! Form::close() !!}

@endsection
