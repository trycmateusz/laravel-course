<?php

declare(strict_types=1);

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class GameBuilderController extends Controller
{
    public function index(): View
    {
        $games = DB::table('games')
            ->join('genres', 'games.genre_id', '=', 'genres.id')
            ->select('games.id', 'games.title', 'games.score', 'genres.name as  genre_name')
            ->paginate(10);
        return view('game.builder.list', [
            'games' => $games
        ]);
    }
    public function dashboard(): View
    {
        $bestGames = DB::table('games')
            ->join('genres', 'games.genre_id', '=', 'genres.id')
            ->select('games.id', 'games.title', 'games.score', 'genres.name as  genre_name')
            ->where('score', '>', 9)
            ->get();
        $stats = [
            'max' => DB::table('games')->max('score'),
            'min' => DB::table('games')->min('score'),
            'avg' => DB::table('games')->avg('score'),
            'scoreGreaterThanSeven' => DB::table('games')->where('score', '>', 7)->count(),
            'count' => DB::table('games')->count()
        ];
        return view('game.builder.dashboard', [
            'bestGames' => $bestGames,
            'stats' => $stats
        ]);
    }

    public function show(int $id): View
    {
        $game = DB::table('games')
            ->find($id);
        return view('game.builder.details', [
            'game' => $game
        ]);
    }
}
