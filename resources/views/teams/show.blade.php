@extends("layouts.app")

@section('title', $team->name )

@section('content')
<h1>{{ $team->name }}</h1>

<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="card mt-3">
                <div class="card-header">
                    <h4><b>Name: </b>{{ $team->name }}</h4>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($team->players as $player)
                        <li class="list-group-item">
                            <a href="/players/{{ $player->id }}" class="nav-link">{{ $player->first_name }}
                                {{ $player->last_name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="card-footer">
                    <p><b>Email: </b>{{ $team->email }}</p>
                    <p><b>Address: </b>{{ $team->address }}</p>
                    <p><b>City: </b>{{ $team->city }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection