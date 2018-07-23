 
   @extends('layouts.master')

   @section('content')

    
       @foreach($posts as $post) 
       <div class="blog-post">
            <h2 class="blog-post-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
            <p class="blog-post-meta">{{$post->created_at}} <a href="/users/{{$post->user->id}}">{{$post->user->name}}</a></p>

            <p>{{$post->body}}</p>
       </div>
       @endforeach
       <a class = "btn btn-primary" href="{{route('create-post')}}">
            Create post
       </a>

   @endsection
