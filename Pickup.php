<?php
namespace Montadora;
use Montadora\Carro;

class Pickup extends Carro
//
{
 const ANO_FABRICACAO = 2017;
 static private $capacidade =300;
 
public function ligar()
/*
 * transformar a função em static - (static public function ligar2())
 * tem que mudar o nome para ligar2() para não gerar conflito com o parent
 * chama sem a função sem instanciar o objeto
 */
 {
     parent::ligar();
     /*
      * parent:: comando especial para pegar métodos da classe pai
      */
     
     echo "\n To ligado \n" . PHP_EOL;
     
     echo "Capacidade: " . self::$capacidade . " litros";
     /*
      * self::$capacidade - utilizado para acessar metódo estático
      * self pega métodos da própria classe, parent:: pega metódos da classe pai
      * this-> e self:: pegam métodos da própria classe, self para estáticos
      * e this-> pode alterar, e self já foi definido, não pode alterar.
      */
     
 }
}
