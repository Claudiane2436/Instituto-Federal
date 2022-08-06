<?php 
require "crud.php";

$nome = filter_input(INPUT_POST, 'txtnome');
$dia = filter_input(INPUT_POST, 'txtdata');
$cpf = filter_input(INPUT_POST, 'txtcpf');
$ende = filter_input(INPUT_POST, 'txtende');
$num = filter_input(INPUT_POST, 'txtnumero');
$cidade = filter_input(INPUT_POST, 'txtcida');
$cp = filter_input(INPUT_POST, 'txtcp');
$tele = filter_input(INPUT_POST, 'txttelefone');


$sql = $conexao ->prepare("INSERT INTO tabfuncionario (fun_nome, fun_data, fun_cpf, fun_ende, fun_numero, fun_cidade, fun_cp, fun_telefone) VALUES (:nome, :dia, :cpf, :ende, :num, :cidade, :cp, :tele)");
$sql ->bindValue(':nome', $nome);
$sql ->bindValue(':dia', $dia);
$sql ->bindValue(':cpf', $cpf);
$sql ->bindValue(':ende', $ende);
$sql ->bindValue(':num', $num);
$sql ->bindValue(':cidade', $cidade);
$sql ->bindValue(':cp', $cp);
$sql ->bindValue(':tele', $tele);
$sql ->execute();

header("Location: listagem.php");

?>