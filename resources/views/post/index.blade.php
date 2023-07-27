@extends('layouts.post.main');

@section('content')
    <div class="container">
        <div class="row mt-2">
            @foreach($posts as $post)
                <a href="{{route('posts.show', $post->id)}}">{{$post->id}} :{{$post->title}}<br>
                {{$post->description}} <br>
                </a>
            @endforeach
        </div>
    </div>
@endsection
