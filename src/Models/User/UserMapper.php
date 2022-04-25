<?php

namespace App\Models\User;

class UserMapper
{
    public function mapRowToUser(array $fields): User
    {
        return User::create($fields);
    }

    public function mapRowsToUsers(array $users): array
    {
        $arrUsers = [];
        foreach ($users as $user) {
            $arrUsers[$user['id']] = User::create($user);
        }
        return $arrUsers;
    }
}