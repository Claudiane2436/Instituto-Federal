<?php
require "crud.php";
$masco = filter_input(INPUT_POST,  'txtmasco');
$serv = filter_input(INPUT_POST, 'txtser');
$dia = filter_input(INPUT_POST, 'txtdata');
$obs = filter_input(INPUT_POST, 'txtobs');



$sql = $conexao ->prepare("INSERT INTO tabservicos (ser_mascote, ser_tipo, ser_data, ser_obs) VALUES (:masco, :tipo, :dia, :obs)");
$sql ->bindValue(':masco', $masco);
$sql ->bindValue(':tipo', $serv);
$sql ->bindValue(':dia', $dia);
$sql ->bindValue(':obs', $obs);
$sql ->execute();

header ("Location: listagem.php");

?>