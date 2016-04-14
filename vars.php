<pre>
    
<?php
/*
* Uma variável pode receber uma função.
*/
$var = function ($nome)
{
    return "Oi {$nome}";
};

var_dump($var);
?>
</pre>