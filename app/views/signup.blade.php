@extends('master')
@section('title')
    <title>
        Sign Up
    </title>
@stop

@section('content')
    {{Form::open(array('url' => '/create-user')) }}

    {{Form::label('email', 'Email :');}}
    {{Form::text('user-email')}}
    <br>
    {{Form::label('name', 'Username :');}}
    {{Form::text('username')}}
    <br>
    {{Form::label('password', 'Password :');}}
    {{Form::password('password')}}
    <br>
    {{Form::label('confirm_password', 'Confirm Password :');}}
    {{Form::password('password')}}
    <br>
    {{Form::submit('Sign Up');}}


    {{Form::close() }}


    {{ HTML::link('/','Home',['class'=>'btn btn-info']) }}


@stop