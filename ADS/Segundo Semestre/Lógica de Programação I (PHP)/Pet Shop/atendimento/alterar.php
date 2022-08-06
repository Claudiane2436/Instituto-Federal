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
$sql = $conexao->prepare("SELECT * FROM tabservicos WHERE ser_id = :id");
$sql ->bindParam(':id',$id);
$sql ->execute();

$registro=$sql->fetch(PDO::FETCH_ASSOC);

   echo "<form action='alterar_action.php' method='post'>";
   echo "<input type='hidden' name='txtid' value='{$registro['ser_id']}'>";
   echo "<label><p>Id do mascote: <input type='text' name='txtmasco' value='{$registro['ser_mascote']}'></p></label><br>";
   echo "<label>Serviço: <input type='radio' name='txtser' value='Castração' value='{$registro['ser_tipo']}'> Castração  <input type='radio' name='txtser' value='Banho e Tosa' value='{$registro['ser_tipo']}'> Banho e Tosa </label> <input type='radio' name='txtser' value='Consulta' value='{$registro['ser_tipo']}'> Consulta </label><br>";
   echo "<label><p>Data: <input type='date' name='txtdata' value='{$registro['ser_data']}'></p></label>";
   echo "<br>";
   echo "<label><p>Observação: </p><input type='number' name='txtobs' style='height:200px; width: 300px;' value='{$registro['ser_obs']}'></label>";
   echo "<p><input type='submit' class='btn btn-success mb-3' value='Alterar'></p></form>";

   ?>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>