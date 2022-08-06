<?php 
include "crud.php";
$sql = $conexao->prepare('SELECT * FROM tabservicos order by ser_id asc');
$sql->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Listagem de Atendimento</title>
</head>
<body class="my-5" style="background-color:lightgray; text-align: center; margin:auto;">
    <h1>Listagem de Atendimento</h1>
    <table width="80%" border="1" class="ml-5"  style="background-color:white;"> 
        <tr>
            <th> Id</th>
            <th> Id do Mascote</th>
            <th> Tipo de Servico </th>
            <th>Data </th>
            <th>Observação</th>
        
            <th colspan="2">Ações</th>
        </tr>
        <?php
        
while($linha=$sql->fetch(PDO::FETCH_ASSOC)){
    
    echo "<tr><td>{$linha['ser_id']}</td>";
    echo "<td>{$linha['ser_mascote']}</td>";
    echo "<td>{$linha['ser_tipo']}</td>";
    echo "<td>{$linha['ser_data']}</td>";
    echo "<td>{$linha['ser_obs']}</td>";
    echo "<td><a href='alterar.php?codigo={$linha['ser_id']}'>ALTERAR</a></td>";
    echo "<td><a href='confirmar.php?codigo={$linha['ser_id']}'>EXCLUIR</a></td></tr>";
}
echo "<h4><a href='cadastrar.php'>Adicionar Atendimento</a></4><br>";
?>
    </table>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>