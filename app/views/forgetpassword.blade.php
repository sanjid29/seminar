@extends('master')
@section('title')
    <title>
        Forget Password
    </title>
@stop
@section('content')
    {{Form::open(array('action' => 'MyController@resetpassword')) }}
    {{Form::label('email', 'Enter Your Email :');}}
    {{Form::text('email')}}
    <br>
    {{Form::submit('Send Email');}}


    {{Form::close() }}

    {{ HTML::link('/','Home',['class'=>'btn btn-info']) }}
@stop