<?php

namespace App\Models\User;

use JetBrains\PhpStorm\Pure;

class UserMapper
{
    /**
     * @param array $fields
     * @return User
     */
    #[Pure] public function mapRowToUser(array $fields): User
    {
        return User::create(fields: $fields);
    }

    /**
     * @param array $users
     * @return array
     */
    #[Pure] public function mapRowsToUsers(array $users): array
    {
        $arrUsers = [];
        foreach ($users as $user) {
            $arrUsers[$user['id']] = User::create(fields: $user);
        }
        return $arrUsers;
    }
}