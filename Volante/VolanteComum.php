<?php
namespace Montadora\Volante;
use Montadora\Volante\InterfaceVolante;

class volanteComum implements InterfaceVolante
{
    private $direcao;
    
    public function girar($direcao) 
    {
        $this->direcao = $direcao;
    }

}