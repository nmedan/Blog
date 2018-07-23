<?php

namespace App\Http\Controllers;

use App\Post;

use App\Tag;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

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

    public function posts() {
        return $this->belongsToMany(Post::class);
    }

    public function store() {
        $this->validate(request(), ['title'=>'required', 'body'=>'required']);
        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'published' => (bool)request('published'),
            'user_id'=>auth()->user()->id
        ]);
        return redirect('/posts');
    }

    public function destroy($id) {
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts');
    }

    
}
