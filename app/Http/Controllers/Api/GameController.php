<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\GameRepository;
use App\Repositories\GameRepositoryInterface;

class GameController extends Controller
{
    protected GameRepository $repository;
    public function __construct(GameRepository $repository)
    {
        $this->repository = $repository;
    }
    public function index()
    {
        return response()->json($this->repository->all()->get());
    }

    public function show(int $id)
    {
        return $this->repository->get($id);
    }
}
