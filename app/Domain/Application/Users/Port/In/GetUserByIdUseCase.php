<?php
namespace App\Application\Users\Port\In;
use App\Application\Users\Dto\UserDto;
interface GetUserByIdUseCase
{
    public function execute(int $userId): ?UserDto;
}