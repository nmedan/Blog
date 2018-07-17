
 @extends('layouts.master')

   @section('content')
   <div class="blog-post">
            <h2 class="blog-post-title">{{$post->title}}</h2>
            <p class="blog-post-meta">{{$post->created_at}} <a href="#">Jacob</a></p>

            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
   </div>

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

   @endsection