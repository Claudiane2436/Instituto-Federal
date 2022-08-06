<?php 
$nivel = $_POST["txtNivel"];

if($nivel==1){
    header("Location: nivel_computador1.php");
}
if($nivel==2){
    header("Location: nivel_computador2.php");
}
if($nivel==3){
    header("Location: nivel_computador3.php");
}

else
{
    echo "<script type='text/javascript'> alert('Opção Inválida!'); history.back();</script>";
    
}

?>