@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias commodi consectetur cumque, debitis dolores ex
        excepturi, illum in labore magni provident quaerat quos ratione rerum sequi sint soluta veritatis. Iste?</p>
    <p>Use "npm run watch" to compile Sass</p>
    <pre>
Artisan examples:

$ php artisan make:controller MessagesController
Controller created successfully.

$ php artisan make:model Message -m
Model created successfully.
Created Migration: 2018_10_02_162713_create_messages_table

$ php artisan migrate
    </pre>
@endsection

@section('sidebar')
    <!-- if we didn't call the parent we wouldn't get the defaults from app.blade.php -->
    @parent
    <p>This is appended to the sidebar & only shows on the homepage</p>
@endsection