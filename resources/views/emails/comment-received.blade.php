Hi {{$post->user->name}}

You've a new comment on you <a href = "{{url('posts/'.$post->id)}}">{{$post->title}}</a> post.$_COOKIE

Comment content:

<p>
    {{$post->comments->last()->text}}
</p>