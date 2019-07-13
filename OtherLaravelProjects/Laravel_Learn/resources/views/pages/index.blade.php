@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome To My App</h1>
        <p>Here is some text, password is "123456" or "234567"</p>
        <p><a class="btn btn-primary btn-lg" href="/laravel_learn/public/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/laravel_learn/public//register" role="button">Register</a></p>
    </div>
@endsection