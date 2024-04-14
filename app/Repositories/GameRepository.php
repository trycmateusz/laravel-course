<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Game;
use Ramsey\Collection\Set as CollectionSet;

class GameRepository implements GameRepositoryInterface {
    public const TYPE_DEFAULT = 'game';
    public const TYPE_ANY = 'any';
    public const TYPES = array('any', 'game', 'dlc', 'demo', 'episode', 'mod', 'movie', 'music', 'series', 'video');
    private Game $gameModel;
    public function __construct(Game $gameModel)
    {
        $this->gameModel = $gameModel;
    }
    public function get(int $id){
        return $this->gameModel->find($id);
    }
    public function all() {
        return $this->gameModel->with('genres');
    }
    public function allPaginated(int $limit) {
        return $this->gameModel->with('genres')
            ->paginate($limit);
    }
    public function best() {
        return $this->gameModel->best()
            ->with('genres')
            ->get();
    }
    public function stats() {
        return [
            'max' => $this->gameModel->max('metacritic_score'),
            'min' => $this->gameModel->min('metacritic_score'),
            'avg' => $this->gameModel->avg('metacritic_score'),
            'scoreGreaterThanSeven' => $this->gameModel->where('metacritic_score', '>', 7)->count(),
            'count' => $this->gameModel->count()
        ];
    }
    public function filterBy(?string $search, ?string $type = self::TYPE_DEFAULT, int $limit = 15) {
        $query = $this->gameModel->with('genres')->orderBy('created_at');
        if($search) {
            $query->whereRaw('name like ?', ["$search%"]);
        }
        if($type && $type !== self::TYPE_ANY){
            $query->where('type', $type);
        }
        return $query->paginate($limit);
    }
}
