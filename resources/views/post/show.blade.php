@extends('layouts.post.main');

@section('content')
    <div class="container">
        <div class="row mt-2">
            <div class="title">
                {{$post->id}} :{{$post->title}}<br>
                {{$post->description}} <br>
            </div>
            <p class="mt-3"> Leave a comment here</p>
            <form action="{{route('posts.update', $post->id)}}" class="form" method="post">
                @csrf
                <div class="mt-1">
                    <select class="form-select" aria-label="Default select example" name="like">
                        <option selected>Grade</option>
                        @foreach($likes as $like)
                            <option value="{{$like->id}}">{{$like->id}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="mt-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Comment</label>
                    <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary mt-3">Sign in</button>
                </div>
            </form>
        </div>
    </div>
@endsection
