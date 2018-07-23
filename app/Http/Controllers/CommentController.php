<?php

namespace App\Http\Controllers;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function create($id) {
        $this->validate(request(), ['author'=>'required', 'text'=>'required']);
        Comment::create([
            'author' => request('author'),
            'text' => request('text'),
            'post_id' => $id
        ]);
        return redirect('/posts/{$id}');
    }
}
