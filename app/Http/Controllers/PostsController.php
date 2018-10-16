<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('index', compact('posts'));
    }

    public function show(Post $post){
        return view('posts.show',compact('post'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        $this->validate(request(),[
            'title' => 'required',
            'alias' => 'required',
            'intro' => 'required',
            'body' => 'required'
        ]);

        Post::create(request(array('title','intro','body', 'alias')));
        return redirect('/');
    }

    public function edit(Post $post){
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post){
        $this->validate(request(),[
            'title' => 'required',
            'alias' => 'required',
            'intro' => 'required',
            'body' => 'required'
        ]);
        $post->update(request(array('title','intro','body', 'alias')));
        return redirect('/');
    }

    public function delete(Post $post){
        $post->delete();
        return redirect('/');
    }
}
