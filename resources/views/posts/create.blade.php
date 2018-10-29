@extends('layouts.app')

@section('content')
  <center> <h4>Welcome to proposal post create</h4>
{!! Form::open(['action' => 'PostsController@store','method'=> 'POST']) !!}
  <center>  <div class="form-group" style="width:500px;">
      {{Form::label('title','Title')}}
      {{Form::text('title',null,['class' => 'form-control', 'placeholder' => 'Title'])}}

    </div>
    <div class="form-group" style="width:500px;">
      {{Form::label('body','Body')}}
      {{Form::textarea('body',null,['class' => 'form-control', 'placeholder' => 'Body Text'])}}

    </div>
    {{Form::submit('submit',['class'=> 'btn btn-primary'])}}
{!! Form::close() !!}

@endsection
