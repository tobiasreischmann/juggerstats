@extends('layout')

@section('content')

{!! Form::model($game, ['action' => 'GameController@store']) !!}

<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', '', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('date', 'Datum') !!}
    {!! Form::date('date', '', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('location', 'Austragungsort') !!}
    {!! Form::text('location', '', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('host', 'Gastgeber') !!}
    {!! Form::text('host', '', ['class' => 'form-control']) !!}
</div>

<button class="btn btn-success" type="submit">Spiel hinzufuegen!</button>

{!! Form::close() !!}


@stop