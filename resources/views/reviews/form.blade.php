<div class="form-group">
{!! Form::label('title','Title:')!!}
{!! Form::text('title',null,['class' => 'form-control'])!!}
</div>
<div class="form-group">
{!! Form::label('artist','Artist:')!!}
{!! Form::text('artist',null,['class' => 'form-control'])!!}
</div>

<div class="form-group">
{!! Form::label('body','Body:')!!}
{!! Form::textarea('body',null,['class' => 'form-control'])!!}
</div>
<div class="form-group">
{!! Form::label('rate','Rate: 0 ~ 100')!!}
{!! Form::number('rate',50,['class' => 'form-control'])!!}
</div>
<div class="form-group">
  {!! Form::label('tags','Category:')!!}
  {!! Form::select('tags[]',$tag_list,null,['class' => 'form-controll','multiple' => true])!!}

</div>
<div class="form-group　files">
<label class="btn btn-outline-danger form-control">
  Post Files
    {!! Form::file('image',['class' => 'd-none'])!!}
</label>

</div>
<div class="form-group">
{!! Form::label('published_at','Publish On:')!!}
{!! Form::input('date','published_at',$published_at,['class' => 'form-control'])!!}
</div>

<div class="form-group">
{!! Form::submit($submitButton,['class' => 'btn btn-outline-secondary form-control'])!!}
</div>
