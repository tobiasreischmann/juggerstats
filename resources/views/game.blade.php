@extends('layout')

@section('content')
    Games:

<a type="button" href="/game/add">Neues Spiel</a>
    <table>
        <tr>
            <th>Name</th>
            <th>Datum</th>
            <th>Austragungsort</th>
            <th>Gastgeber</th>
        </tr>
    @foreach($games as $game)
        <tr>
            <td>{{ $game->name }}</td>
            <td>{{ $game->date }}</td>
            <td>{{ $game->location }}</td>
            <td>{{ $game->host }}</td>
        </tr>
    @endforeach
    </table>
@stop