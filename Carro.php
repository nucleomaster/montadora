<?php
namespace Montadora;

use Montadora\Motor\Motor;
use Montadora\Volante\InterfaceVolante;

class Carro
//classe - definição do objeto
{
    const ANO_FABRICACAO = 2016;
    /*
     * Constante é um atributo estático/definição do objeto e não o objeto.
     */
    
    public $cor='Branco';    
    public $rodas = 14;
    public $arCondicionado = false;
    public $farol = true;
    private $tipoCombustivel = 'flex';
    private $quantCombustivel = 0;
    /**
     *
     * @var type 
     */
    private $motor;
    private $volante;
    private $ligado = false;
    /**
     * Função construtora
     * @param string $motor
     */
    public function __construct(Motor $motor, InterfaceVolante $volante)
        //colocou Motor e InterfaceVolante para travar o método
        //executado antes do objeto ser criado - nao retorna/funcao especial//
    {
        $this->motor =$motor;
        $this->volante =$volante;
    }
    /**
     * Acelera ou desacelera conforme o valor da aceleração informada
     * @param int $aceleracao
     * @return int Combustível gasto
     */
    private function andar($aceleracao)
    {
        if($this->ligado == true){
            /*
             * $this-> (desta classe)
             */
            
        echo "Andou:".$aceleracao." Km \n\n";
        $gasto = $this->motor->acelerar($aceleracao);
        $this->quantCombustivel = $this->quantCombustivel - $gasto;
        // ou $this->quantCombustivel -= $gasto;
        }
    }
    
    public function virar($direcao)
    {
        $this->volante->girar($direcao);
    }
    /**
     * faz o veículo emitir um som chato
     * @param string $intensidade
     * @return string
     * @author Fred <Fred@email.com>
     */
    public function buzinar($intensidade)
    {
        return "Buzinei $intensidade!!!";
    }
    /**
     * liga o veículo
     */
    public function ligar()
    {
        if ($this->quantCombustivel > 0){
            
        $this->ligado = true;
        $this->motor->ligar();
        }else{
            throw new Exception('Sem Combustível');
            /*
             * throw - dispara uma mensagem informando o erro
             */
        }
    }
    
    public function acelerar($potencia)
    {
        $this->andar($potencia);
    }
    
    public function frear($potencia)
    {
        $this->andar(0);
    }
    
    public function re($potencia)
    {
        $this->andar($potencia*-1);
    }
    
    public function abastecer($litros)
    {
        $this->quantCombustivel += $litros;
    }
  
     public function __toString() 
    {
        return self::ANO_FABRICACAO. $this->tipoCombustivel;
    }

}