<?php 
include "crud.php";
$sql = $conexao->prepare('SELECT * FROM tblusuarios order by usuid asc');
$sql->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Registros</title>
</head>
<body>
    <h1>Listagem de dados</h1>
    <table width="80%" border="1"> 
        <tr>
            <th> Id</th>
            <th> Nome</th>
            <th> Email</th>
            <th colspan="2">Ações</th>
        </tr>
        <?php
        
while($linha=$sql->fetch(PDO::FETCH_ASSOC)){
    
    echo "<tr><td>{$linha['usuid']}</td>";
    echo "<td>{$linha['usunome']}</td>";
    echo "<td>{$linha['usuemail']}</td>";
    echo "<td><a href='alterar.php?codigo={$linha['usuid']}'>ALTERAR</a></td>";
    echo "<td><a href='confirmar.php?codigo={$linha['usuid']}'>EXCLUIR</a></td></tr>";
}
echo "<h4><a href='cadastrar.php'>ADICIONAR REGISTRO</a></4><br>";
?>
    </table>
</body>
</html>
