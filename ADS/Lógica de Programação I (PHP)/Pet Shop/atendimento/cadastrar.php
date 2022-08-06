<?php 
include "crud.php";
$sql = $conexao->prepare('SELECT * FROM tabveterinario order by vete_id asc');
$sql->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Listagem de Registros</title>
</head>
<body class="my-5" style="background-color:lightgray; text-align: center; margin:auto;">
    <h3>Listagem de Mascotes</h3>
    <table width="80%" border="1"  class="ml-5"  style="background-color:white;"> 
        <tr>
            <th> Id</th>
            <th> Nome do mascote</th>
            <th> Sexo </th>
            <th>Raça </th>
            <th>Idade</th>
            <th>Peso</th>
            <th>Nome do proprietario </th>
            <th> Telefone</th>
            <th> Endereço</th>
           
        </tr>
        <?php
        
while($linha=$sql->fetch(PDO::FETCH_ASSOC)){
    
    echo "<tr><td>{$linha['vete_id']}</td>";
    echo "<td>{$linha['vete_mascote']}</td>";
    echo "<td>{$linha['vete_sexo']}</td>";
    echo "<td>{$linha['vete_raca']}</td>";
    echo "<td>{$linha['vete_idade']}</td>";
    echo "<td>{$linha['vete_peso']}</td>";
    echo "<td>{$linha['vete_propri']}</td>";
    echo "<td>{$linha['vete_tele']}</td>";
    echo "<td>{$linha['vete_ende']}</td>";
}

?>
    </table>
</body>

</html>
<body>
 <div class="container span7 text-center col-md-4 col-md-offset-3 mt-5" style="background-color:linen; margin: 0 auto;float: none;">
    <h1 class="mt-5">Cadastrar Atendimento</h1>

    <form action="cadastrar_action.php" method="post">
        <label>
            <p>Id do mascote: <input type="number" min="0" name="txtmasco"></p>
        </label>
        <br>
        <label> 
        Servico:  
            <input type="radio" value="Castração" name="txtser"> Castração
            <input type="radio" value="Banho e Tosa" name="txtser"> Banho e Tosa
            <input type="radio" value="Consulta" name="txtser"> Consulta
        </label>
        <br>
        <label> 
            <p>Data: <input type="date" name="txtdata"> </p>
        </label>
        <br>
        <label>
            <p>Observação</p> 
            <input type="text" style="height:200px; width: 300px;" name="txtobs">
        </label>
            
        <p><input type="submit" class="btn btn-success" value="Cadastrar"></p>
    </form>
 </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>