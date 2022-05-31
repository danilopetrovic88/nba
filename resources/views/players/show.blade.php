@extends("layouts.app")

@section('title', $player->first_name )

@section('content')
<h1>{{ $player->first_name }} {{ $player->last_name }}</h1>

<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="card mt-3">
                <div class="card-header">
                    <h4><b>Name: </b>{{ $player->first_name }} {{ $player->last_name }}</h4>
                </div>
                <div class="card-body">
                    <p><b>Email: </b>{{ $player->email }}</p>
                </div>
                <div class="card-footer">
                    <a class="nav-link" href="/teams/{{ $player->team->id }}"><b>Team: </b>{{ $player->team->name }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection