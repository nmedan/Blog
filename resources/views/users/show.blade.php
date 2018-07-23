@extends('layouts.master')

   @section('content')

       <h1>{{$user->name}}'s posts</h1>
       <div>
       @foreach($user->posts as $post) 
          
              <h2 class="blog-post-title">
                  <a href="/posts/{{$post->id}}">{{$post->title}}</a>
               </h2>
               <p>
                  {{$post->body}}
               </p>
          
       @endforeach
       <div>


   @endsection