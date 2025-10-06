<?php

namespace App\Domain\Users\Service\Contracts;

interface PasswordStrengthEvaluator
{
    public function evaluate(string $password): array;
}
