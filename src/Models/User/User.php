<?php

namespace App\Models\User;

class User
{
    public static function create(array $fields): User
    {
        // TODO need create validator class
        return new self(
            $fields['id'],
            $fields['username'],
            $fields['password'],
            $fields['email']
        );
    }

    public function __construct(private int $id, private string $username, private string $password, private string $email)
    {
    }

    public function getUsername(): string
    {
        return $this->username;

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