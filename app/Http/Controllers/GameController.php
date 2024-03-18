<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function index(): View
    {
        $games = DB::table('games')
            ->join('genres', 'games.genre_id', '=', 'genres.id')
            ->select('games.id', 'games.title', 'games.score', 'genres.name as  genre_name')
            ->paginate(10);
        return view('game.list', [
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
        return view('game.dashboard', [
            'bestGames' => $bestGames,
            'stats' => $stats
        ]);
    }

    public function show(int $gameId): View
    {
        $game = DB::table('games')
            ->find($gameId);
        return view('game.show', [
            'game' => $game
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
