<?php

namespace App\Models\User;

interface IUserRepository
{
    /**
     * @param string $id
     * @return User|false
     */
    public function findById(string $id): User|false;

    /**
     * @param string $username
     * @return User|false
     */
    public function findByUserName(string $username): User|false;

    /**
     * @return User[]|false
     */
    public function findAll(): array|false;
}