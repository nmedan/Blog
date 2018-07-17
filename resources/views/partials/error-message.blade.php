@if ($errors->has($fieldName))
    <div class="alert-danger">
        @foreach($errors->get($fieldName) as error) 
            <li>{{$error}}</li>
        @endforeach

    </div>
@endif