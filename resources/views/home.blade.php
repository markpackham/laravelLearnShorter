@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias commodi consectetur cumque, debitis dolores ex
        excepturi, illum in labore magni provident quaerat quos ratione rerum sequi sint soluta veritatis. Iste?</p>
@endsection

@section('sidebar')
    <!-- if we didn't call the parent we wouldn't get the defaults from app.blade.php -->
    @parent
    <p>This is appended to the sidebar & only shows on the homepage</p>
    <p>Use "npm run watch" to compile Sass</p>
@endsection