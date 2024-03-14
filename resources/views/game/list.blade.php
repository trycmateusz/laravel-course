@extends('layout.main')

@section('title', 'Kewlgame - games')

@section('content')
<h1>
    Games
</h1>
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
                Category
            </th>
            <th data-column="options">
                Options
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($games ?? [] as $game)
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
                {{ $game->genre_id }}
            </td>
            <td data-column="options">
                <a class="game-list__game-link" href="{{ route('games.show', ['game' => $game->id]) }}">
                    Details
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection