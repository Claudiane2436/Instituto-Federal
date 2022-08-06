<?php 
$valor1 = $_POST["txnvalor1"];

function area(int $valor1)
{
    $a = 3.14 * ($valor1*$valor1);
    echo "A área de ".$valor1." é " .$a. " cm";
}
 area($valor1);

 function comprimento(int $valor1)
 {
    $com = 2* $valor1 * 3.14;
    return $com;
 }
 $compri = comprimento($valor1);
 echo "<br> O comprimento de ".$valor1. " é ".$compri. " cm."
?>