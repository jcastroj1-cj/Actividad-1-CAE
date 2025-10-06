<?php   
namespace App\Application\Users\Port\out;
use App\Application\Users\Dto\UserDto;  
interface TokenIssuerPort
{
    public function issueToken(UserDto $user): string;
}