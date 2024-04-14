@extends('layout.main')

@if (!empty($game))
    @section('title', 'Kewlgame - Game ' . $game->title)
@else
    @section('title', 'Kewlgame - Game not found')
@endif


@section('content')
    @if (!empty($game))
        <h1>
            {{ $game->name }}
        </h1>
        <h2>
            Opis
        </h2>
        @if (strlen($game->description) > 0)
            <p>
                {{ $game->description }}
            </p>
        @else
            <p>
                The game doesn't have any description.
            </p>
        @endif
        @if (count($game->genres) > 0)
            <span>
                Gatunki: {{ $game->genres->implode('name', ', ') }}
            </span>
        @endif
    @else
        <h1>
            The game doesn't exist : (
        </h1>
    @endif
@endsection
