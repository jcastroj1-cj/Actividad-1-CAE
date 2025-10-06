<?php
namespace App\Application\Users\Service;
use App\Domain\Users\Repository\UserRepository;
use App\Domain\Users\Entity\Usuario;

class DeleteUserService
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function deleteUser(int $id): void
    {
        // Aquí puedes agregar lógica adicional si es necesario
        $this->userRepository->delete($id);
    }
} 
    