<?php
namespace App\Application\Users\Service;
use App\Domain\Users\Repository\UserRepository;
use App\Domain\Users\Entity\Usuario;    
 
class LoginService
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login(string $username, string $password): ?Usuario
    {
        // Aquí puedes agregar lógica adicional si es necesario
        return $this->userRepository->findByUsernameAndPassword($username, $password);
    }
}