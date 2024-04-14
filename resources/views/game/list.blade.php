@extends('layout.main')

@section('title', 'Kewlgame - games')

@section('content')
    <h1>
        Games
    </h1>

    <form class="game-list__search-form" action="{{ route('get.games.list') }}">
        <label for="search">
            Game's name
        </label>
        <input type="text" name="search" placeholder="" value="{{ $search ?? '' }}">
        <select name="type">
            <option @if ($type === 'any') selected @endif value="any">Any type</option>
            <option @if ($type === 'game') selected @endif value="game">Game</option>
            <option @if ($type === 'dlc') selected @endif value="dlc">DLC</option>
            <option @if ($type === 'demo') selected @endif value="demo">Demo</option>
            <option @if ($type === 'episode') selected @endif value="episode">Episode</option>
            <option @if ($type === 'mod') selected @endif value="mod">Mod</option>
            <option @if ($type === 'movie') selected @endif value="movie">Movie</option>
            <option @if ($type === 'music') selected @endif value="music">Music</option>
            <option @if ($type === 'series') selected @endif value="series">Series</option>
            <option @if ($type === 'video') selected @endif value="video">Video</option>
        </select>
        <button class="game-list__search-form-button" type="submit">
            Search
        </button>
    </form>
    <div class="game-list-table-wrapper">
        <table class="game-list">
            <thead>
                <tr>
                    <th data-column="nr">
                        Nr.
                    </th>
                    <th data-column="name">
                        Name
                    </th>
                    <th data-column="type">
                        Type
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
                        <td data-column="name">
                            {{ $game->name }}
                        </td>
                        <td data-column="type">
                            {{ $game->type }}
                        </td>
                        <td data-column="score">
                            {{ $game->metacritic_score }}
                        </td>

                        <td data-column="genre_id">
                            @if (count($game->genres) === 0)
                                -
                            @else
                                {{ $game->genres->implode('name', ', ') }}
                            @endif

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
    @if ($games)
        <div class="laravel-pagination">
            {{ $games->links() }}
        </div>
    @endif
@endsection
