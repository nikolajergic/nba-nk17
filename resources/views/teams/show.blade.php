@extends('layout.app')

@section('title', 'Team')

@section('content')
    <h1>Team</h1>

    <p>Name: {{$team->name}}</p>
    <p>Address: {{$team->adresa}}</p>
    <p>City: {{$team->grad}}</p>

    @foreach($team->players as $player)
        <li>
            <a href="/players/{{$player->id}}">{{ $player->full_name }}</a>
        </li>
    @endforeach


@endsection

