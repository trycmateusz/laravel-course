<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Models\Game;

class GameEloquentController extends Controller
{
    public function index(): View
    {
        $games = Game::with('genre')
            ->paginate(10);
        return view('game.eloquent.list', [
            'games' => $games
        ]);
    }
    public function dashboard(): View
    {
        $bestGames = Game::best()
            ->get();
        $stats = [
            'max' => Game::max('score'),
            'min' => Game::min('score'),
            'avg' => Game::avg('score'),
            'scoreGreaterThanSeven' => Game::where('score', '>', 7)->count(),
            'count' => Game::count()
        ];
        return view('game.eloquent.dashboard', [
            'bestGames' => $bestGames,
            'stats' => $stats
        ]);
    }

    public function show(int $id): View
    {
        $game = Game::with('genre')
            ->find($id);
        return view('game.eloquent.details', [
            'game' => $game
        ]);
    }
}
