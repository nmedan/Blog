 
   @extends('layouts.master')

   @section('content')

       <a class = "btn btn-primary" href="{{route('create-post')}}">
            Create post
       </a>
       @foreach($posts as $post) 
       <div class="blog-post">
            <h2 class="blog-post-title">{{$post->title}}</h2>
            <p class="blog-post-meta">{{$post->created_at}} <a href="#">Jacob</a></p>

            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
       </div>
       @endforeach


   @endsection