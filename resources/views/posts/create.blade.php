    @extends ('layouts.master');

    @section('content')
        <form method="post" action="/posts">
        {{csrf_field()}}
        
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title">
            @include('partials.error-message', ['fieldName' => 'title'])
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <input type="text" name="body" class="form-control" id="exampleInputPassword1" placeholder="Body">
            @include('partials.error-message', ['fieldName' => 'body'])
        </div>
        <div class="form-group form-check">
            <input type="checkbox" name="published" value="1" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endsection