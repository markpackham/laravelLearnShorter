@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <img class="cover_image" src="/laravel_learn/public/storage/cover_images/{{$post->cover_image}}" alt="cover image">
    <br><br>
    <div>
    {{--{{$post->body}}--}}
    <!-- here we are parsing the html so we can use the wysiwyg when creating posts -->
        {!! $post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <p>
        <a href="/laravel_learn/public/posts" class="btn btn-default">Go Back</a>
    </p>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/laravel_learn/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
            <!-- power to delete posts, disguise method as a POST since laravel doesn't know DELETE -->
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection