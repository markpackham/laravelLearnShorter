@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    <p>Ordered by their updated and not create date</p>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img class="cover_image" src="/laravel_learn/public/storage/cover_images/{{$post->cover_image}}" alt="cover image">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/laravel_learn/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        <!--Allow for pagination -->
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection