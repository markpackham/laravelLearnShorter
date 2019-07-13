@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <!-- store is the function we are submitting to, need to set enctype for files, multipart/data gives us upload button -->
    {!! Form::open(['action'=>'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class'=> 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body','',['id'=> 'article-ckeditor','class'=> 'form-control', 'placeholder' => 'Body Text'])}}
    </div>
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection