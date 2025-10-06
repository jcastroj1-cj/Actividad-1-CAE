<?php       
namespace App\Application\Users\Mapper;
use App\Application\Users\Dto\UserDto;  
use App\Domain\Application\Users\Entity\User;
class UserMapper
{
    public static function toDto(User $user): UserDto
    {
        return new UserDto(
            $user->getId(),
            $user->getEmail(),
            $user->getName()
        );
    }
}