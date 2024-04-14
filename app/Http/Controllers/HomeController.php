<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
class HomeController extends Controller {
    public function __invoke () {
        return view('home.main');
    }
}
