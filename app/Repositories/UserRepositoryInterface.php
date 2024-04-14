<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\User;

interface UserRepositoryInterface {
    public function updateModel(User $user, array $data): void;
}
