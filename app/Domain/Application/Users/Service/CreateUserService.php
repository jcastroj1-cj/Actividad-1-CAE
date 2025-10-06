<?php
namespace App\Domain\Users\Entity;
use App\Domain\Users\Repository\UserRepository;
use App\Domain\Users\Entity\Usuario;

class CreateUserService
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function createUser(int $id, string $clave, string $nombre, string $rol): Usuario
    {
        // Aquí puedes agregar lógica adicional si es necesario
        $user = new Usuario($id, $clave, $nombre, $rol);
        $this->userRepository->save($user);
        return $user;
    }
}
