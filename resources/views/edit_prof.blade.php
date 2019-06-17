@extends('layout')
@section('content')

<h3>Edit Profile</h3>

{!! Form::open( ['url' => 'update_prof', 'files' => true])!!}
<div class="form-group">
{!! Form::label('name','Name:')!!}
{!! Form::text('name',$user->name,['class' => 'form-control'])!!}
</div>
<div class="form-group">
{!! Form::label('email','Email:')!!}
{!! Form::text('email',$user->email,['class' => 'form-control'])!!}
</div>
<div class="form-group">
{!! Form::label('body','Profile:')!!}
{!! Form::textarea('body',$user->body,['class' => 'form-control'])!!}
</div>
<div class="form-group　files">
<label class="btn btn-danger">
  Post avatar image
    {!! Form::file('image',['class' => 'd-none'])!!}
</label>

</div>

<div class="form-group">
{!! Form::submit('更新',['class' => 'btn btn-primary form-control'])!!}
</div>
{!! Form::close()!!}

@endsection
