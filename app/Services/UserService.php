<?php
namespace App\Services;

use App\Models\User;

class UserService
{
    public function getUserByEmail(string $email): ?User
    {
        return User::where('email', $email)->first();
    }

    public function createUser(array $params): User
    {
        return User::create($params);
    }

    public function updateUser(array $params, string $uuid): bool
    {
        return User::where('uuid', $uuid)->update($params);
    }
}
