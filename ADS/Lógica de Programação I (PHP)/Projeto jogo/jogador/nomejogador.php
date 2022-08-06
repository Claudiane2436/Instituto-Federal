<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Nível do jogo</title>
</head>
<body>
<div class="grande">
    <h1>Nível do jogo</h1>
    <h4>1 - Fácil <h4>
    <h4>2 - Médio <h4>
    <h4>3 - Difícil</h4>
    <form action="nivel_jogador.php" method="post"> 
        <label> Nível: 
            <input type="number" name="txtNivel">
        </label>
        <input type="submit" class="botaope" value="Enviar">
    </form>
</div>
</body>
</html>

<?php 
session_start();
$jogador = $_POST["txtNome"];
$jogador2 = $jogador;
$_SESSION['jogador2'] = $jogador2;
?>