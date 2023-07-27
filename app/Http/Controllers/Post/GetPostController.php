<?php

namespace App\Http\Controllers\Post;


use App\Http\Requests\GradeRequest;
use App\Http\Requests\PostRequest;
use App\Models\Grade;
use App\Models\Like;
use App\Models\Post;
use Illuminate\Http\Request;

class GetPostController
{
    public function getAllPosts(){
        $posts = Post::all();
        return view("post.index", compact('posts'));
    }
    public function create(){
        return view("post.create");
    }
    public function store(PostRequest $value){
        $data = $value->validated();
        Post::create($data);
        return redirect()->route("posts.index");
    }
    public function show(Post $post){
        $likes = Like::all();
        return view("post.show", compact('post', 'likes'));
    }
    public function addGrade(GradeRequest $value, Post $post){
        $data = $value->validated();
        $grade = Grade::create($data);
        $post->grade()->attach($grade->id);
        return redirect()->route('posts.index');
    }

}
