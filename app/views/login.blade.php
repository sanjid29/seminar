@extends('master')
@section('title')
    <title>
        Log In Page
    </title>
@stop

@section('content')
    {{Form::open(array('action' => 'MyController@login')) }}



    {{Form::label('name', 'Username :');}}
    {{Form::text('username')}}
    <br>
    {{Form::label('password', 'Password :');}}
    {{Form::password('password')}}
    <br>
    {{Form::submit('Log In');}}


    {{Form::close() }}

    {{ HTML::link('/','Home',['class'=>'btn btn-info']) }}



@stop