<?php 
require "crud.php";
$id = $_POST['txtid'];
$nome = $_POST['txtnome'];
$sexo =$_POST['txtsexo'];
$raca = $_POST['txtraca'];
$idade = $_POST['txtidade'];
$peso = $_POST['txtpeso'];
$prop = $_POST['txtpro'];
$tele = $_POST['txttelefone'];
$ende = $_POST['txtende'];

try{
    $stmt = $conexao ->prepare("UPDATE tabveterinario SET vete_mascote = :nome, vete_sexo = :sexo, vete_raca= :raca, vete_idade =:idade, vete_peso=:peso, vete_propri =:prop, vete_tele =:tele, vete_ende = :ende  WHERE vete_id=:id");
    $stmt ->execute(array(
        ':id' => $id,
        ':nome' => $nome,
        ':sexo' =>$sexo,
        ':raca' =>$raca,
        ':idade' =>$idade,
        ':peso' =>$peso,
        ':prop' =>$prop,
        ':tele' =>$tele,
        ':ende' =>$ende
    ));
}
catch (PDOException $e){
    echo 'Error: '. $e ->getMessage();

}
header("Location: listagem.php");

?>