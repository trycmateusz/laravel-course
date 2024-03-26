<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\Repositories\GameRepository;

class GameController extends Controller
{
    private GameRepository $gameRepository;
    public function __construct(GameRepository $gameRepository)
    {
        $this->gameRepository = $gameRepository;
    }
    public function index(): View
    {
        return view('game.list', [
            'games' => $this->gameRepository->allPaginated(10)
        ]);
    }
    public function dashboard(): View
    {
        return view('game.dashboard', [
            'bestGames' => $this->gameRepository->best(),
            'stats' => $this->gameRepository->stats()
        ]);
    }

    public function show(int $id): View
    {
        return view('game.details', [
            'game' => $this->gameRepository->get($id)
        ]);
    }
}
