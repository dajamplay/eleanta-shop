<?php

namespace App\Models\User;

use JetBrains\PhpStorm\Pure;

class User
{
    /**
     * @param array $fields
     * @return User
     */
    #[Pure] public static function create(array $fields): User
    {
        return new self(
            $fields['id'],
            $fields['username'],
            $fields['password'],
            $fields['email']
        );
    }

    /**
     * User constructor.
     * @param int $id
     * @param string $username
     * @param string $password
     * @param string $email
     */
    public function __construct(private int $id, private string $username, private string $password, private string $email)
    {
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;

    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}