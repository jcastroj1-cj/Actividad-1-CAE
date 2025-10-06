<?php

namespace App\Application\Users\Port\Out;

interface PasswordResetTokenPort
{
    public function create(string $userId): string;

    public function validate(string $token): bool;

    public function expire(string $token): void;
}
