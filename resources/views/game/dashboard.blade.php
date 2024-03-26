@extends('layout.main')

@section('title', 'Kewlgame - games dashboard')

@section('content')
<h1>
    All info about games
</h1>
<a href={{ route('get.b.games.list') }} class="games-link">
    All games
</a>
<div class="games-stats">
    <h2>
        Stats
    </h2>
    <ul>
        <li class="games-stats__stat">
            Ilość gier: <span class="games-stats__stat-highlight">{{ $stats['count'] }}</span>
        </li>
        <li class="games-stats__stat">
            Gry z ponad 7 gwiazdkami:
            <span class="games-stats__stat-highlight">
                {{ $stats['scoreGreaterThanSeven'] }}
            </span>
        </li>
        <li class="games-stats__stat">
            Największy wynik: <span class="games-stats__stat-highlight">{{ $stats['max'] }}</span>
        </li>
        <li class="games-stats__stat">
            Najmniejszy wynik: <span class="games-stats__stat-highlight">{{ $stats['min'] }}</span>
        </li>
        <li class="games-stats__stat">
            Średni wynik: <span class="games-stats__stat-highlight">{{ $stats['avg'] }}</span>
        </li>
    </ul>
</div>

<h2>
    Best Games
</h2>

<div class="game-list-table-wrapper">
    <table class="game-list">
        <thead>
            <tr>
                <th data-column="nr">
                    Nr.
                </th>
                <th data-column="title">
                    Title
                </th>
                <th data-column="score">
                    Score
                </th>
                <th data-column="genre_id">
                    Genre
                </th>
                <th data-column="options">
                    Options
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bestGames ?? [] as $game)
            <tr>
                <td data-column="nr">
                    {{ $loop->index + 1 }}
                </td>
                <td data-column="title">
                    {{ $game->title }}
                </td>
                <td data-column="score">
                    {{ $game->score }}
                </td>
                <td data-column="genre_id">
                    {{ $game->genre->name }}
                </td>
                <td data-column="options">
                    <a class="game-list__game-link" href="{{ route('get.games.details', ['id' => $game->id]) }}">
                        Details
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection