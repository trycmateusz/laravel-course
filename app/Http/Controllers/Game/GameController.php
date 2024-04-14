<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Repositories\GameRepository;
use Illuminate\View\View;

use App\Services\GameService;
use Illuminate\Http\Request;

class GameController extends Controller
{
    private GameService $gameService;
    public function __construct(GameService $gameService)
    {
        $this->gameService = $gameService;
    }
    public function index(Request $request): View
    {
        $search = $request->get('search');
        $type = $request->get('type', GameRepository::TYPE_DEFAULT);
        $size = $request->get('size', 15);
        if(!in_array($type, GameRepository::TYPES, true)){
            $type = GameRepository::TYPE_DEFAULT;
        }
        $gamesFilteredPaginated = $this->gameService->filterBy($search, $type, $size);
        $gamesFilteredPaginated->appends([
            'type' => $type,
            'search' => $search
        ]);
        return view('game.list', [
            'type' => $type,
            'search' => $search,
            'games' => $gamesFilteredPaginated,
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
