<?php
namespace Montadora\Motor;
use Montadora\Motor\Motor;

class MotorTurbo extends Motor
{
    /*
     * alt+insert
     */
    public function acelerar($potencia)//overwrigth - subscreveu
    {
        $this->aceleracao = $potencia * 2;
        $gasto = $potencia * $this->getCilindrada();
        return $gasto/1000;
    }
    public function getCilindrada() //implementou
    {
     return 1400;   
    }

}