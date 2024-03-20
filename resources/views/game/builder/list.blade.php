@extends('layout.main')

@section('title', 'Kewlgame - games')

@section('content')
<h1>
    Games
</h1>

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
                    {{ $game->genre_name }}
                </td>
                <td data-column="options">
                    <a class="game-list__game-link" href="{{ route('get.b.games.details', ['id' => $game->id]) }}">
                        Details
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="laravel-pagination">
    {{ $games->links() }}
</div>
@endsection
