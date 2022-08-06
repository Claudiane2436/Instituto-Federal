<?php 
require "crud.php";

$usua = filter_input(INPUT_POST, 'txtusu');
$senha = filter_input(INPUT_POST, 'txtsenha');


$sql = $conexao ->prepare("INSERT INTO tablogin (login_usuario, login_senha) VALUES (:usuario, :senha)");
$sql ->bindValue(':usuario', $usua);
$senha=md5($senha);
$sql ->bindValue(':senha', $senha);

$sql ->execute();

header("Location: consulta.php");

?>