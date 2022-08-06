<?php 
require "crud.php";

$nome = filter_input(INPUT_POST, 'txtnome');
$sexo = filter_input(INPUT_POST, 'txtsexo');
$raca = filter_input(INPUT_POST, 'txtraca');
$idade = filter_input(INPUT_POST, 'txtidade');
$peso = filter_input(INPUT_POST, 'txtpeso');
$proprietario = filter_input(INPUT_POST, 'txtpro');
$telefone = filter_input(INPUT_POST, 'txttelefone');
$endereco = filter_input(INPUT_POST, 'txtende');

$sql = $conexao ->prepare("INSERT INTO tabveterinario (vete_mascote, vete_sexo, vete_raca, vete_idade, vete_peso,vete_propri, vete_tele, vete_ende) VALUES (:nome, :sexo, :raca, :idade, :peso, :propri, :telefone, :endere)");
$sql ->bindValue(':nome', $nome);
$sql ->bindValue(':sexo', $sexo);
$sql ->bindValue(':raca', $raca);
$sql ->bindValue(':idade', $idade);
$sql ->bindValue(':peso', $peso);
$sql ->bindValue(':propri', $proprietario);
$sql ->bindValue(':telefone', $telefone);
$sql ->bindValue(':endere', $endereco);
$sql ->execute();

header("Location: listagem.php");

?>