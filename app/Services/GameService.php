<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\GameRepository;

class GameService {
    protected GameRepository $repository;
    public function __construct(GameRepository $repository)
    {
        $this->repository = $repository;
    }
    public function get(int $id){
        return $this->repository->get($id);
    }
    public function all() {
        return $this->repository->all();
    }
    public function allPaginated(int $limit) {
        return $this->repository->allPaginated($limit);
    }
    public function best() {
        return $this->repository->best();
    }
    public function stats() {
        return $this->repository->stats();
    }
}
