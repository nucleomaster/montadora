<pre>    
<?php
ini_set('display_errors', 1);/*mostra se há erro*/
error_reporting(E_ALL);/*Define quais erros serão reportados - exibir tudo*/

use Montadora\Motor\Motor1600; //forma 2 para chamar o arquivo
use Montadora\Motor\MotorTurbo; 

use Montadora\Volante\volanteComum as Volante; //apelidar a classe como volante

require_once './Carro.php';
/*require_once, requere 1 vez só, só vai ser chamado uma vez, evitar de usar o require (sozinho)*/

require_once './Carro.php';
require_once './Pickup.php';
require_once './Motor.php';
require_once './Motor1000.php';
require_once './Motor1600.php';
require_once './MotorTurbo.php';
require_once './VolanteComum.php';

$motor1 = new Montadora\Motor\Motor1000(); //forma 1 para chamar o arquivo
$motor2 = new Motor1600();
$motort = new MotorTurbo();

$volante = new Volante();

$carro1 = new Carro($motort, $volante); /*instanciar - objeto criado*/

try
{
$carro1->abastecer(30);
$carro1->ligar();
$carro1->acelerar(30);
/*
 * se //$carro1->abastecer(30)
 * ele tenta executar, não consegue e vai para o catch (está sem combustível)
 */
}catch(Exception $e)
{
    echo "\n" . $e->getMessage()."\n";
}
//$s10 = new Pickup($motor1);
//$s10->abastecer(40);
//$s10->ligar();





var_dump($carro1);
var_dump($motor1, $motor2);

if ($motor1 == $motor2){
    echo "São iguais";
}else{
    echo "são diferentes";
}
//print_r($carro1);
//Carro::ANO_FABRICACAO;
/*
 * :: chama atributo estático
 */


?>
</pre>

<!-- Estudar Countable, jsonSerialize, count-->