<?php   
namespace App\Application\Users\Port\In;
use App\Application\Users\Dto\UserDto;  
use App\Application\Users\Dto\UserCreateDto;    

interface ResetPasswordUseCase
{
    public function execute(string $token, string $newPassword): void;
}