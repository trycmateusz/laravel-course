<?php

namespace App\Console\Commands\Steam;

use Illuminate\Console\Command;
use Illuminate\Http\Client\Factory;
use Illuminate\Support\Facades\Http;

class UpdateGame extends Command
{
    protected Factory $httpClient;
    public function __construct(Factory $httpClient)
    {
        parent::__construct();
        $this->httpClient = $httpClient;
    }
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'steam:update-game';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update a single game record from Steam';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $response = $this->httpClient->get('https://postman-echo.com/get', [
            'foo' => 'bar',
            'alpha' => 'omega'
        ]);
        dd($response);
    }
}
