<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserProfile;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller {
    private UserService $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function profile () {
        return view('me.profile', [
            'user' => Auth::user()
        ]);
    }
    public function edit() {
        return view('me.edit', [
            'user' => Auth::user()
        ]);
    }
    public function update(UpdateUserProfile $request) {
        $data = $request->validated();
        $this->userService->updateModel(Auth::user(), $data);
        return redirect()
            ->route('me.profile')
            ->with('status', 'Account updated');
    }
}
