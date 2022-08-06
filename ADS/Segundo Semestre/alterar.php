<?php 
include "crud.php";
$id = $_GET['codigo'];
echo "<h1>Alterando Registro</h1>";
$sql = $conexao->prepare("SELECT * FROM tblusuarios WHERE usuid = :id");
$sql ->bindParam(':id',$id);
$sql ->execute();

$registro=$sql->fetch(PDO::FETCH_ASSOC);

   echo "<form action='alterar_action.php' method='post'>";
   echo "<input type='hidden' name='txtid' value='{$registro['usuid']}'>";
   echo "<label><p>Nome: <input type='text' name='txtnome' value='{$registro['usunome']}'></p></label>";
   echo "<label><p>Endereço: <input type='text' name='txtemail' value='{$registro['usuemail']}'></p></label>";
   echo "<p><input type='submit' value='Alterar'></p></form>";

   ?>