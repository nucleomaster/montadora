<?php
namespace Montadora\Motor;
use Montadora\Motor\Motor;

class Motor1000 extends Motor
{
    private $cilindrada = 1000;
    public function getCilindrada()
    {
        return $this->cilindrada;//$this->cilindrada;
    }
}