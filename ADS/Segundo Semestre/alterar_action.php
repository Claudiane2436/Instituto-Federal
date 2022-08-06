<?php 
require "crud.php";
$id = $_POST['txtid'];
$nome =$_POST['txtnome'];
$email = $_POST['txtemail'];
try{
    $stmt = $conexao ->prepare("UPDATE tblusuarios SET usunome = :nome, usuemail = :email WHERE usuid=:id");
    $stmt ->execute(array(
        ':id' => $id,
        ':nome' => $nome,
        ':email' =>$email
    ));
}
catch (PDOException $e){
    echo 'Error: '. $e ->getMessage();

}
header("Location: listagem2.php");

?>