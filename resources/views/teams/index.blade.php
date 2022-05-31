@extends("layouts.app")

@section('title', 'Teams')

@section('content')
<h1>Teams</h1>

<ul class="list-group">
    @foreach($teams as $team)
    <li class="list-group-item">
        <a href="/teams/{{ $team->id }}" class="nav-link">{{ $team->name }}</a>
    </li>
    @endforeach
</ul>
<div class="container mt-3">
    @foreach($comments as $comment)
    <blockquote>{{ $comment->title }}</blockquote>
    @endforeach
    <form action="#">
        @csrf
        <input type="text" name="content" placeholder="Leave comment" class="form-control"><br>
        <button class="btn btn-success btn-sm m-2">Commnet</button>
    </form>
</div>
@endsection