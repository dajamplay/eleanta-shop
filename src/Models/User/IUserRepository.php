<?php

namespace App\Models\User;

interface IUserRepository
{
    public function findById(string $id) : array | User | false;
    public function findByUserName(string $username) : array | User | false;
    public function findAll() : array | false;
}