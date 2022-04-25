<?php

namespace App\Models\User;

use App\Models\AbstractRepository;


class UserRepository extends AbstractRepository implements IUserRepository
{
    public function findById(string $id): array | false
    {
        $stmt = $this->pdo->prepare('SELECT * FROM `users` WHERE `id` = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function findByUserName(string $username): array | false
    {
        $stmt = $this->pdo->prepare('SELECT * FROM `users` WHERE `username` = ?');
        $stmt->execute([$username]);
        return $stmt->fetch() ?? [];
    }

    public function findAll(): array | false
    {
        $stmt = $this->pdo->prepare('SELECT * FROM `users`');
        $stmt->execute();
        return $stmt->fetchAll();
    }
}