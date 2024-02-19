<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {
    public function list () {
        return view('user.list');
    }
    public function testShow (Request $request, int $id) {
        $uri = $request->path();
        $url = $request->url();
        $fullUrl = $request->fullUrl();

        $httpMethod = $request->method();

        $all = $request->all();
        $name = $request->query('name');
        $lastName = $request->input('lastName', 'Tryc');

        $game = $request->input('games.1');

        if($request->isMethod('post')){
            dump('to jest post');
        }
        dd($name);
        dump('test user show ' . $id);
    }
    public function testStore(Request $request, int $id){
        if(!$request->isMethod('POST')){
            return dd('to nie jest post');
        }
    }
    public function testDelete(Request $request, int $id){
        dd($id, $request);
    }
    public function testPut(Request $request, int $id){
        dd($id, $request);
    }
}
