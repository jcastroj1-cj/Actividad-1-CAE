<?php

namespace App\Domain\Users\ValueObject;

class PasswordHash
{
    private string $hash;

    public function __construct(string $hash)
    {
        $this->hash = $hash;
    }

    public function getHash(): string
    {
        return $this->hash;
    }
}
