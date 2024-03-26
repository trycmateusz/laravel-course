<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Game;

class GameRepository implements GameRepositoryInterface {
    protected $model;
    public function __construct(Game $model)
    {
        $this->model = $model;
    }
    public function get(int $id){
        return Game::find($id);
    }
    public function all() {
        return Game::with('genre');
    }
    public function allPaginated(int $limit) {
        return Game::with('genre')
            ->paginate($limit);
    }
    public function best() {
        return Game::best()
            ->get();
    }
    public function stats() {
        return [
            'max' => Game::max('score'),
            'min' => Game::min('score'),
            'avg' => Game::avg('score'),
            'scoreGreaterThanSeven' => Game::where('score', '>', 7)->count(),
            'count' => Game::count()
        ];
    }
}
