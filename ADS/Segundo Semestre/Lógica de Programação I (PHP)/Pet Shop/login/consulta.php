<?php 
include "crud.php";
$sql = $conexao->prepare('SELECT * FROM tablogin order by login_id asc');
$sql->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Listagem de Login</title>
</head>
<body class="my-5" style="background-color:lightgray; text-align: center; margin:auto;">
    <h1>Listagem de Login</h1>
    <table width="80%" border="1" class="ml-5"  style="background-color:white;"> 
        <tr>
            <th> Id</th>
            <th> Login</th>
            <th> Senha </th>
            <th colspan="2">Ações</th>
        </tr>
        <?php
        
while($linha=$sql->fetch(PDO::FETCH_ASSOC)){
    
    echo "<tr><td>{$linha['login_id']}</td>";
    echo "<td>{$linha['login_usuario']}</td>";
    echo "<td>{$linha['login_senha']}</td>";
   
    echo "<td><a href='alterar.php?codigo={$linha['login_id']}'>ALTERAR</a></td>";
    echo "<td><a href='confirmar.php?codigo={$linha['login_id']}'>EXCLUIR</a></td></tr>";
}
echo "<h4><a href='cadastrar.php'>Adicionar Login</a></4><br>";
?>
    </table>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>



