<?php   
namespace App\Domain\Users\Service\Contracts;
interface PasswordHasher
{
    public function hash(string $password): string;
    public function verify(string $password, string $hash): bool;
}   
