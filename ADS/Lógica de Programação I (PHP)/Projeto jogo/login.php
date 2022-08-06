
<?php 
session_start();

$usuario = $_POST["txtusuario"];
$senha = $_POST["txtsenha"];

$nome = $usuario;
$_SESSION['nome'] = $nome;

if((($usuario=='Claudiane')&&($senha==123456))||(($usuario=='GU3021611')&&($senha=123456)))
{
    echo "<h4 class='cor'>Olá, ".$usuario." como deseja jogar?</h4>" ;



    //header("Location: bem_vindo.php");

}
else
{
    echo "<script type='text/javascript'> alert('Erro dados errados!'); history.back();</script>";
    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
<div class="grande">
    <h4>1 - Sozinho <h4>
    <h4>2 - Com outro jogador <h4>
    <form action="bem_vindo.php" method="post"> 
        <label> Opção: 
            <input type="number" name="txtNumero">
        </label>
        <input class="botaope" type="submit" value="Enviar">
    </form> 
</div>
</body>
</html>

