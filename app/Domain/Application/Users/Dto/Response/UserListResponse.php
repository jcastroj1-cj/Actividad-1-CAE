<?php

namespace App\Application\Users\Dto\Response;

class UserListResponse
{
    private array $users;

    public function __construct(array $users)
    {
        $this->users = $users;
    }

    public function getUsers(): array
    {
        return $this->users;
    }
}
