<?php

namespace App\Models\User;

class UserMapper implements IUserRepository
{
    public function __construct(private IUserRepository $userRepository) {}

    public function findById(string $id): User | false
    {
        if ($user = $this->userRepository->findById($id)) {
            return $this->mapRowToUser($user);
        }
        return false;
    }

    public function findByUserName(string $username): User | false
    {
        $user = $this->userRepository->findByUserName($username);
        return $this->mapRowToUser($user);
    }

    public function findAll(): array | false
    {
        $users = $this->userRepository->findAll();
        return $this->mapRowsToUsers($users);
    }

    private function mapRowToUser(array $fields): User
    {
        return User::create($fields);
    }

    private function mapRowsToUsers(array $users): array
    {
        $arrUsers = [];
        foreach ($users as $user) {
            $arrUsers[$user['id']] = User::create($user);
        }
        return $arrUsers;
    }
}