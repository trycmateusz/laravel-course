<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
class HomeController extends Controller {
    public function __invoke () {
        // $user = Auth::user();
        // $user = $request->user();
        // $userId = Auth::id();
        // $isLogged = Auth::check();
        // dump($isLogged);
        return view('home.main');
    }
}
