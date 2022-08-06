<?php 
require "crud.php";
$usu = $_POST['txtusu'];
$senha = $_POST['txtsenha'];

try{
    $stmt = $conexao ->prepare("UPDATE tablogin SET login_usuario = :usu, login_senha = :senha  WHERE login_id=:id");
    $stmt ->execute(array(
        ':usu' => $usu,
        ':senha' => $senha,
    ));
}
catch (PDOException $e){
    echo 'Error: '. $e ->getMessage();

}
header("Location: consulta.php");

?>