@extends ('layouts.master')


    @section('content')
        <form method="post" action="/login">
            {{csrf_field()}}
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                 @include('partials.error-message', ['fieldName' => 'email']) 
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                 @include('partials.error-message', ['fieldName' => 'password']) 
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    @endsection
