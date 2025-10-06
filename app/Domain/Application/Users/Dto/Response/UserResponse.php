<?php

namespace App\Application\Users\Dto\Response;

class UserResponse
{
    private string $userId;
    private string $email;
    private string $name;

    public function __construct(string $userId, string $email, string $name)
    {
        $this->userId = $userId;
        $this->email = $email;
        $this->name = $name;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
