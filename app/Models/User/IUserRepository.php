<?php

namespace App\Models\User;

interface IUserRepository
{
    public function findById(int $id) : array | User;
    public function findByUserName(string $username) : array | User;
    public function findAll() : array;
}