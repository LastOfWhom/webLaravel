<?php

namespace App\Http\Controllers\Post;


use App\Http\Requests\PostRequest;
use App\Models\Grade;
use App\Models\Post;
use Illuminate\Http\Request;

class GetPostController
{
    public function getAllPosts(){
        $posts = Post::find(1);
        dd($posts->grade);

        return view("post.index", compact('posts'));
    }
    public function create(){
        return view("post.create");
    }
    public function store(PostRequest $value){
        $data = $value->validated();
        Post::create($data);
        redirect()->route("posts.index");
    }
}
