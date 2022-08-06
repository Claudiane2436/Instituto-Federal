<?php 
    require_once 'crud.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Usuário</title>
</head>
<body>
    <h1>Listagem de Usuários</h1>
    <?php 
        $linha;
        $sql = "SELECT *FROM tabclientes";
        $resultado = $conexao->prepare($sql);
        $resultado->execute();
        while($linha=$resultado->fetch(PDO::FETCH_ASSOC)){
            echo "ID = ".$linha['cli_id']."<br>";
            echo "Nome = ".$linha['cli_nome']."<br>";
            echo "Endereço = ".$linha['cli_endereco']."<br>";
        }
    ?>
</body>
</html>