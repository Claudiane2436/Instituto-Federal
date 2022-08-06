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
echo "<div class='container span7 text-center col-md-4 col-md-offset-3 mt-5'   style='background-color:linen; margin: 0 auto;float: none;'><h1>Alterando Registro</h1>";
$sql = $conexao->prepare("SELECT * FROM tabveterinario WHERE vete_id = :id");
$sql ->bindParam(':id',$id);
$sql ->execute();

$registro=$sql->fetch(PDO::FETCH_ASSOC);

   echo "<form action='alterar_action.php' method='post'>";
   echo "<input type='hidden' name='txtid' value='{$registro['vete_id']}'>";
   echo "<label><p>Nome: <input type='text' name='txtnome' value='{$registro['vete_mascote']}'></p></label><br>";
   echo "<label>Sexo: <input type='radio' name='txtsexo' value='Feminino' value='{$registro['vete_sexo']}'> Feminino <input type='radio' name='txtsexo' value='Masculino' value='{$registro['vete_sexo']}'> Masculino</label><br>";
   echo "<label><p>Raça: <input type='text' name='txtraca' value='{$registro['vete_raca']}'></p></label> <br>";
   echo "<label><p>Idade: <input type='number' name='txtidade' value='{$registro['vete_idade']}'></p></label><br>";
   echo "<label><p>Peso: <input type='text' name='txtpeso' value='{$registro['vete_peso']}'></p></label><br>";
   echo "<label><p>Nome do proprietario: <input type='text' name='txtpro' value='{$registro['vete_propri']}'></p></label><br>";
   echo "<label><p>Telefone: <input type='text' name='txttelefone' value='{$registro['vete_tele']}'></p></label><br>";
   echo "<label><p>Endereço: <input type='text' name='txtende' value='{$registro['vete_ende']}'></p></label>";
   echo "<p><input type='submit' class='btn btn-success mb-3' value='Alterar'></p></form>";

   ?>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>