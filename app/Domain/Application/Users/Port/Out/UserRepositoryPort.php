<?php   
namespace App\Domain\Application\Users\Port\Out;
use App\Domain\Application\Users\Entity\User;

interface UserRepositoryPort
{
    public function save(User $user): void;

    public function findByEmail(string $email): ?User;
}