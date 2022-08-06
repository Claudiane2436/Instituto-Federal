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
$sql = $conexao->prepare("SELECT * FROM tablogin WHERE login_id = :id");
$sql ->bindParam(':id',$id);
$sql ->execute();

$registro=$sql->fetch(PDO::FETCH_ASSOC);
   
   echo "<form action='alterar_action.php' method='post' class='container span7 text-center col-md-4 col-md-offset-3 mt-5'   style='background-color:linen; margin: 0 auto;float: none;''>";
   echo "<h1 class='mt-5'>Alterando Registro</h1>";
   echo "<input type='hidden' name='txtid' value='{$registro['login_id']}'>";
   echo "<label><p>Nome: <input type='text' name='txtusu' value='{$registro['login_usuario']}'></p></label><br>";
   echo "<label><p>Senha: <input type='password' name='txtsenha' value='{$registro['login_senha']}'></label>";
   echo "<p><input type='submit' class='btn btn-success' value='Alterar'></p></form>";

   ?>