@extends("layouts.app")

@section('title', 'Register')

@section('content')
<h1>Register</h1>

<div class="container">
    <div class="row">
        <div class="col-10 offset-1">
            <form action="/register" method="POST">
                @csrf
                <input type="text" class="form-control" placeholder="name" name="name"><br>
                <input type="email" class="form-control" placeholder="email" name="email"><br>
                <input type="password" class="form-control" placeholder="password" name="password"><br>
                <input type="password" class="form-control" placeholder="confirm password"
                    name="password_confirmation"><br>
                <button type="submit" class="btn btn-success">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection