<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail;

use App\Mail\CommentReceived;

use App\Comment;

use App\Post;


class CommentsController extends Controller
{
    public function store($id) {
        $post = Post::find($id);
        $post->comments()->create([
            'author'=>request('author'),
            'text'=>request('text'),
            'post_id'=>$post->id

        ]);

        Mail::to($post->user)->send(new CommentReceived($post));

        return redirect('/posts'.$post->id);
    }
}
