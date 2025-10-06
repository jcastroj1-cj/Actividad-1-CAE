<?php

namespace App\Application\Users\Dto\Command;

class ChangePasswordCommand
{
    private string $userId;
    private string $oldPassword;
    private string $newPassword;

    public function __construct(string $userId, string $oldPassword, string $newPassword)
    {
        $this->userId = $userId;
        $this->oldPassword = $oldPassword;
        $this->newPassword = $newPassword;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function getOldPassword(): string
    {
        return $this->oldPassword;
    }

    public function getNewPassword(): string
    {
        return $this->newPassword;
    }
}
