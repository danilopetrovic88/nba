@extends("layouts.app")

@section('title', 'Login')

@section('content')
<h1>Login</h1>

<div class="container">
    <div class="row">
        <div class="col-10 offset-1">
            <form action="/login" method="POST">
                @csrf
                <input type="email" class="form-control" placeholder="email" name="email"><br>
                <input type="password" class="form-control" placeholder="password" name="password"><br>
                <button type="submit" class="btn btn-warning">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection