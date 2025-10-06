<?php   
namespace App\Application\Users\Port\In;
use App\Application\Users\Dto\UserDto;

interface LogoutUseCase
{
    public function execute(int $userId): void;
}