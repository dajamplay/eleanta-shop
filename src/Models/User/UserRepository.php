<?php

namespace App\Models\User;

use App\Database\DB;
use PDO;

class UserRepository implements IUserRepository
{
    /**
     * @var PDO
     */
    private PDO $pdo;

    /**
     * @var UserMapper
     */
    private UserMapper $userMapper;

    /**
     * UserRepository constructor.
     * @param UserMapper $userMapper
     */
    public function __construct(UserMapper $userMapper)
    {
        $this->pdo = DB::instance();
        $this->userMapper = $userMapper;
    }

    /**
     * @param string $id
     * @return User|false
     */
    public function findById(string $id): User | false
    {
        $stmt = $this->pdo->prepare(query: 'SELECT * FROM `users` WHERE `id` = ?');
        $stmt->execute(params: [$id]);
        return ($user = $stmt->fetch()) ? $this->userMapper->mapRowToUser(fields: $user) : false;
    }

    /**
     * @param string $username
     * @return array|false
     */
    public function findByUserName(string $username): User | false
    {
        $stmt = $this->pdo->prepare(query: 'SELECT * FROM `users` WHERE `username` = ?');
        $stmt->execute(params: [$username]);
        return $stmt->fetch();
    }

    /**
     * @return User[]|false
     */
    public function findAll(): array | false
    {
        $stmt = $this->pdo->prepare(query: 'SELECT * FROM `users`');
        $stmt->execute();
        return $stmt->fetchAll();
    }
}