<?php
namespace App\Domain\Users\Entity;

class Gastos
    {
        private date $fecha;
        private int $valorSinIva;
        private int $ivaTotal;
        private int $valorTotalConIva;
        private string $nombreUsuario;
        private string $lugar;
        private string $descripcion;


    public function __construct(date $fecha, int $valorSinIva, int $ivaTotal, int $valorTotalConIva, string $nombreUsuario, string $lugar, string $descripcion)
    {
        $this->fecha = $fecha;
        $this->valorSinIva = $valorSinIva;
        $this->ivaTotal = $ivaTotal;
        $this->valorTotalConIva = $valorTotalConIva;
        $this->nombreUsuario = $nombreUsuario;
        $this->lugar = $lugar;
        $this->descripcion = $descripcion;     
    
     }
   public function getFecha(): date
    {
         return $this->fecha;

    }   

   public function getValorSinIva(): int
    {
        return $this->valorSinIva;
    }

   public function getIvaTotal(): int
    {
        return $this->ivaTotal;
    }

   public function getValorTotalConIva(): int
    {
        return $this->valorTotalConIva;
    }

   public function getNombreUsuario(): string
    {
        return $this->nombreUsuario;
    }

   public function getLugar(): string
    {
        return $this->lugar;
    }

   public function getDescripcion(): string
    {
        return $this->descripcion;
    }
} 