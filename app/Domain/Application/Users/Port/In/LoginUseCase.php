<?php
namespace App\Application\Users\Port\In;
use App\Application\Users\Dto\UserDto;


interface LoginUseCase
{
    public function execute(string $email, string $password): ?UserDto;
}
