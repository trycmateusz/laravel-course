<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepository;

class UserService {
    protected UserRepository $repository;
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }
    public function updateModel(User $user, array $data) {
        $this->repository->updateModel($user, $data);
    }
}
