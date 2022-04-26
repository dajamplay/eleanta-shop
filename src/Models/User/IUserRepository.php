<?php

namespace App\Models\User;

interface IUserRepository
{
    public function findById(string $id): User|false;

    public function findByUserName(string $username): User|false;

    /** @return User[]|false */
    public function findAll(): array|false;
}