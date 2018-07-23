
 @extends('layouts.master')

   @section('content')
   <div class="blog-post">
            <h2 class="blog-post-title">{{$post->title}}</h2>
            <p class="blog-post-meta">{{$post->created_at}} <a href="/users/{{$post->user->id}}">Jacob</a></p>
            <a class="btn btn-primary" href="/posts/destroy/{{$post->id}}">Delete</a>
            @if (count($post->tags))
                <ul class="list-unstyled">
                     @foreach ($post->tags as $tag)
                        <li class="btn btn-primary">
                            <a style="color:white" href="/posts/tags/{{$tag->name}}">{{$tag->name}}</a>
                        </li>
                     @endforeach
                </ul>
            @endif
            <p>{{$post->body}}</p>
   </div>
   <h3>Comments</h3>
   @foreach ($post->comments as $comment)
          <ul>
               <li>
               <div>
                    {{$comment->author}}
                    </div>
                    <div>
                    {{$comment->text}}
                    </div>
               </li>
          </ul>
   @endforeach
   
   <form method="post" action="/posts/{{$post->id}}">
        {{csrf_field()}}
        
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title">
            @include('partials.error-message', ['fieldName' => 'author'])
        </div>
        <div class="form-group">
            <label for="text">Text</label>
            <input type="text" name="text" class="form-control" id="exampleInputPassword1" placeholder="Body">
            @include('partials.error-message', ['fieldName' => 'text'])
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
   @endsection
