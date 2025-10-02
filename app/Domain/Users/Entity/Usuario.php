<?php
namespace App\Domain\User\Entity;

class Usuario
{
    private int $id;
    private string $clave;
    private string $nombre;
    private string $rol;

    public function __construct(int $id, string $clave, string $nombre, string $rol)
    {
        $this->id = $id;
        $this->clave = $clave;
        $this->nombre = $nombre;
        $this->rol = $rol;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getClave(): string
    {
        return $this->clave;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getRol(): string
    {
        return $this->rol;
    }
}