<?php

declare(strict_types=1);

namespace App\Repositories;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserRepository implements UserRepositoryInterface {
    private User $userModel;
    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }
    public function updateModel(User $user, array $data): void {
        $user->email = $data['email'] ?? $user->email;
        $user->name = $data['name'] ?? $user->name;
        $user->phone = $data['phone'] ?? $user->phone;
        $user->save();
    }
}
