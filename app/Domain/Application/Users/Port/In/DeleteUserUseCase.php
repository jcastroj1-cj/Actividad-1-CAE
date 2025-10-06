<?php   
namespace App\Application\Users\Port\In;
use App\Application\Users\Dto\UserDto;
interface DeleteUserUseCase
{
    public function execute(int $userId): void;
}