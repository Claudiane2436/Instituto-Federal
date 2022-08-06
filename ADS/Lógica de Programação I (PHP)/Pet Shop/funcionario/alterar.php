<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body style="background-color:lightgray; text-align: center; margin:auto;">
<?php 
include "crud.php";
$id = $_GET['codigo'];
echo "<div class='container span7 text-center col-md-4 col-md-offset-3 mt-5' style='background-color:linen; margin: 0 auto;float: none;'><h1>Alterando Registro</h1>";
$sql = $conexao->prepare("SELECT * FROM tabfuncionario WHERE fun_id = :id");
$sql ->bindParam(':id',$id);
$sql ->execute();

$registro=$sql->fetch(PDO::FETCH_ASSOC);

   echo "<form action='alterar_action.php'  method='post' >";
   echo "<input type='hidden' name='txtid' value='{$registro['fun_id']}'>";
   echo "<label><p>Nome: <input type='text' name='txtnome' value='{$registro['fun_nome']}'></p></label><br>";
   echo "<label><p>Data: <input type='text' name='txtdata' value='{$registro['fun_data']}'></p></label><br>";
   echo "<label><p>CPF: <input type='text' name='txtcpf' value='{$registro['fun_cpf']}'></p></label><br>";
   echo "<label><p>Endereço: <input type='text' name='txtende' value='{$registro['fun_ende']}'></p></label><br>";
   echo "<label><p>Número: <input type='number' name='txtnumero' value='{$registro['fun_numero']}'></p></label><br>";
   echo "<label><p>Cidade: <input type='text' name='txtcida' value='{$registro['fun_cidade']}'></p></label><br>";
   echo "<label><p>CP: <input type='text' name='txtcp' value='{$registro['fun_cp']}'></p></label><br>";
   echo "<label><p>Telefone: <input type='text' name='txtcp' value='{$registro['fun_telefone']}'></p></label>";
   echo "<p><input type='submit' class='btn btn-success mb-3' value='Alterar'></p></form></div>";

   ?>