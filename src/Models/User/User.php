<?php

namespace App\Models\User;

class User
{
    public static function create(array $fields): User
    {
        return new self(
            id: $fields['id'],
            password: $fields['password'],
            email: $fields['email']
        );
    }

    public function __construct(
        private int $id,
        private string $password,
        private string $email)
    {
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getId(): int
    {
        return $this->id;
    }
}