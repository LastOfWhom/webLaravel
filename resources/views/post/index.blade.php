@extends('layouts.post.main');

@section('content')
    <div class="container">
        <div class="row mt-2">
            @foreach($posts as $post)
                {{$post->id}}:{{$post->title}} <br>
                {{$post->description}} <br>
            @endforeach
        </div>
    </div>
@endsection
