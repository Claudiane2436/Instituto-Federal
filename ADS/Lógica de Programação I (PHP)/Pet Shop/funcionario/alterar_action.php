<?php 
require "crud.php";
$id = $_POST['txtid'];
$nome = $_POST['txtnome'];
$dia =$_POST['txtdata'];
$cpf = $_POST['txtcpf'];
$ende = $_POST['txtende'];
$num = $_POST['txtnumero'];
$cida = $_POST['txtcida'];
$cp = $_POST['txtcp'];
$tele = $_POST['txttelefone'];

try{
    $stmt = $conexao ->prepare("UPDATE tabfuncionario SET fun_nome = :nome, fun_data = :dia, fun_cpf= :cpf, fun_ende =:ende, fun_numero=:num, fun_cidade =:cida, fun_cp =:cp, fun_telefone = :tele  WHERE fun_id=:id");
    $stmt ->execute(array(
        ':id' => $id,
        ':nome' => $nome,
        ':dia' =>$dia,
        ':cpf' =>$cpf,
        ':ende' =>$ende,
        ':num' =>$num,
        ':cida' =>$cida,
        ':cp' =>$cp,
        ':tele' =>$tele
    ));
}
catch (PDOException $e){
    echo 'Error: '. $e ->getMessage();

}
header("Location: listagem.php");

?>