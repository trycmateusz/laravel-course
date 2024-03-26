@extends('layout.main')

@if (!empty($game))
@section('title', 'Kewlgame - Game ' . $game->title)
@else
@section('title', 'Kewlgame - Game not found')
@endif


@section('content')
@if (!empty($game))
<h1>
    {{ $game->title }}
</h1>
<p>
    {{ $game->description }}
</p>
<span>
    {{ $game->genre->name }}
</span>
@else
<h1>
    The game doesn't exist : (
</h1>
@endif
@endsection