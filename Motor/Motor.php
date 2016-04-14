<?php
namespace Montadora\Motor;
/**
 * modelo base do motor
 * @author John Doe <john.doe@example.com>
 * @link http://www.google.com
 */
abstract class Motor
/*
 * abstract - classe base / estabelece padronização para Motor1000 e Motor1600
 */
{
    //static private $cilindrada = 1000;
    private $combustivel = 'gasolina';
    /*
     * private - atributo restrito / só a classe que criou pode acessar
     */
    protected $aceleracao = 0;
    /*
     * protected pode ser acessado pela classe que criou e todos os filhos 
     * o protected pode extender o privado é restrito somente à classe
    */
    private $ligado = false;
    
    /**
     * liga ou desliga o Motor
     * @return bool
     */
    public function ligar()
    {
        $this->ligado = !$this->ligado ;
        //funçao liga/desliga
        return $this->ligado;
    }
    /**
     * Acelerar o motor
     * @param type $potencia
     */
    public function acelerar($potencia)
    {
        
        $this->aceleracao = $potencia;
        $gasto = $potencia * $this->getCilindrada();
        return $gasto/1000;
    }
    
    abstract public function getCilindrada();
}