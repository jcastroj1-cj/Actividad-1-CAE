<?php   
namespace App\Application\Users\Port\In;
use App\Application\Users\Dto\UserDto;

interface RequestPasswordResetUseCase
{
    public function execute(string $email): void;
}