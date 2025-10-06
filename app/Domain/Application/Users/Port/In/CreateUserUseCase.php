<?php   
namespace App\Application\Users\Port\In;
use App\Application\Users\Dto\UserDto;  
use App\Application\Users\Dto\UserCreateDto;

interface CreateUserUseCase
{
    public function execute(UserCreateDto $userCreateDto): UserDto;
}
