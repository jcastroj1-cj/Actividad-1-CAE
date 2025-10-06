<?php

namespace App\Application\Users\Port\Out;

interface PasswordStrengthPolicyPort
{
    public function isValid(string $password): bool;

    public function getErrors(): array;
}
