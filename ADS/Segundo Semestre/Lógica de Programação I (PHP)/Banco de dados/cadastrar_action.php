<?php 
require "crud.php";

$nome = filter_input(INPUT_POST, 'txtnome');
$email = filter_input(INPUT_POST, 'txtemail');

$sql = $conexao ->prepare("INSERT INTO tblusuarios (usunome, usuemail) VALUES (:nome_usuario, :email_usuario)");
$sql ->bindValue('nome_usuario', $nome);
$sql ->bindValue(':email_usuario', $email);
$sql ->execute();

header("Location: listagem2.php");

?>