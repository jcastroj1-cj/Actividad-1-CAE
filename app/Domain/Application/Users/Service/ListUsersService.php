<?php
namespace App\Application\Users\Service;
use App\Domain\Users\Repository\UserRepository;
use App\Domain\Users\Entity\Usuario;

class listUsersService
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function listUsers(): array
    {
        // Aquí puedes agregar lógica adicional si es necesario
        return $this->userRepository->findAll();
    }
}