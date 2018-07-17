<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::published();
        return view('posts.index', compact('posts'));
    }

    public function show($id) {
        $post = Post::with('comments')->find($id);
        return view('posts.show', compact('post'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {
        $this->validate(request(), ['title'=>'reqired', 'body'=>'required']);
        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'published' => request('published')
        ]);
        return redirect('/posts');
    }

    
}