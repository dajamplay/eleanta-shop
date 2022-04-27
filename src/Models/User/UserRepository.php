<?php

namespace App\Models\User;

use App\Database\DB;
use PDO;

class UserRepository implements IUserRepository
{
    private PDO $pdo;
    private UserMapper $userMapper;

    public function __construct(UserMapper $userMapper)
    {
        $this->pdo = DB::instance();
        $this->userMapper = $userMapper;
    }

    public function findByEmail(string $email): User|false
    {
        $stmt = $this->pdo->prepare('SELECT * FROM `users` WHERE `email` = ?');
        $stmt->execute([$email]);
        return ($user = $stmt->fetch()) ? $this->userMapper->mapRowToUser($user) : false;
    }
    public function findById(string $id): User | false
    {
        $stmt = $this->pdo->prepare('SELECT * FROM `users` WHERE `id` = ?');
        $stmt->execute([$id]);
        return ($user = $stmt->fetch()) ? $this->userMapper->mapRowToUser($user) : false;
    }

    public function findByUserName(string $username): User | false
    {
        $stmt = $this->pdo->prepare('SELECT * FROM `users` WHERE `username` = ?');
        $stmt->execute([$username]);
        return $stmt->fetch();
    }

    /** @return User[]|false */
    public function findAll(): array | false
    {
        $stmt = $this->pdo->prepare('SELECT * FROM `users`');
        $stmt->execute();
        return ($users = $stmt->fetchAll()) ? $this->userMapper->mapRowsToUsers($users) : false;
    }
}