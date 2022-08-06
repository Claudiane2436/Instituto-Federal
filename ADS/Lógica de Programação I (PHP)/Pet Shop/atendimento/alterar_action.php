<?php 
require "crud.php";
$id = $_POST['txtid'];
$masco = $_POST['txtmasco'];
$servi =$_POST['txtser'];
$dia = $_POST['txtdata'];
$obs = $_POST['txtobs'];

try{
    $stmt = $conexao ->prepare("UPDATE tabservicos SET ser_mascote = :masco, ser_tipo = :servi, ser_data= :dia, ser_obs =:obs  WHERE ser_id=:id");
    $stmt ->execute(array(
        ':id' => $id,
        ':masco' => $masco,
        ':servi' =>$servi,
        ':dia' =>$dia,
        ':obs' =>$obs
    ));
}
catch (PDOException $e){
    echo 'Error: '. $e ->getMessage();

}
header("Location: listagem.php");



?>