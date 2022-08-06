
<?php 
$opcao = $_POST["txtNumero"];

if($opcao==1){
    header ("Location: ./computador/nivel.html");
}
if($opcao==2){
    header("Location:  ./jogador/jogador.html");
}
else
{
    echo "<script type='text/javascript'> alert('Opção Inválida!'); history.back();</script>";
    
}

?>