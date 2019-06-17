@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    You are logged in!
                    <p class="pt-3">  <a href="{{ route('reviews.index')}}">Let's post your review</a></p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
