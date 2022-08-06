<?php 
$nivel = $_POST["txtNivel"];

if($nivel==1){
    header("Location: nivel_jogador1.php");
}
if($nivel==2){
    header("Location: nivel_jogador2.php");
}
if($nivel==3){
    header("Location: nivel_jogador3.php");
}

else
{
    echo "<script type='text/javascript'> alert('Opção Inválida!'); history.back();</script>";
    
}

?>