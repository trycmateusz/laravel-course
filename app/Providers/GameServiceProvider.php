<?php

namespace App\Providers;

use App\Http\Controllers\Game\GameController;
use App\Models\Game;
use App\Repositories\GameRepository;
use App\Services\GameService;
use Illuminate\Support\ServiceProvider;

class GameServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
