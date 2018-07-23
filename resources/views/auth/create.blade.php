@extends ('layouts.master')

    @section('content')
        <form method="post" action="/register">
            {{csrf_field()}}
            
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control"  aria-describedby="emailHelp" placeholder="Name">
                 @include('partials.error-message', ['fieldName' => 'name']) 
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control"  placeholder="Email">
                 @include('partials.error-message', ['fieldName' => 'email']) 
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
                 @include('partials.error-message', ['fieldName' => 'password']) 
            </div>
            <div class="form-group form-check">
                <label for="age">Age</label>
                <input type="number" name="age" class="form-control" placeholder="Age">
                 @include('partials.error-message', ['fieldName' => 'age']) 
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    @endsection
