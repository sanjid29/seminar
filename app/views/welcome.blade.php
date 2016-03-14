@extends('master')
@section('title')
    <title> Welcome TO Activation</title>
@stop
@section('content')

    {{ HTML::link('/sign-up','Sign Up',['class'=>'btn btn-info']) }}
    {{ HTML::link('/log-in','Login',['class'=>'btn btn-info']) }}
    {{ HTML::link('/forget-password','Forget Password',['class'=>'btn btn-danger']) }}
@stop