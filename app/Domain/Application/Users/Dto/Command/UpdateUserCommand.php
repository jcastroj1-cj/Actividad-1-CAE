<?php
namespace App\Application\Users\Dto\Command;

class UpdateUserCommand
{
    private string $userId;
    private string $email;
    private string $name;
    private string $password;

    public function __construct(string $userId, string $email, string $name, string $password)
    {
        $this->userId = $userId;
        $this->email = $email;
        $this->name = $name;
        $this->password = $password;
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

    public function getPassword(): string
    {
        return $this->password;
    }
}
