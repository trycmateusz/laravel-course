<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

use App\Services\GameService;

class GameController extends Controller
{
    private gameService $gameService;
    public function __construct(gameService $gameService)
    {
        $this->gameService = $gameService;
    }
    public function index(): View
    {
        return view('game.list', [
            'games' => $this->gameService->allPaginated(10)
        ]);
    }
    public function dashboard(): View
    {
        return view('game.dashboard', [
            'bestGames' => $this->gameService->best(),
            'stats' => $this->gameService->stats()
        ]);
    }

    public function show(int $id): View
    {
        return view('game.details', [
            'game' => $this->gameService->get($id)
        ]);
    }
}
