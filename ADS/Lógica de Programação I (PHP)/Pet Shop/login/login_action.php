<?php 

session_start();

$usuario = $_POST["txtlogin"];

$nome = $usuario;
$_SESSION['nome'] = $nome;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Menu</title>
</head>
<body>
    
    <div class="row">
            <li class=" col-sm-2 ml-5">
                <a href="../atendimento/listagem.php" class="btn" style="background-color:#fd7162; list-style: none;">Atendimento</a>
            </li>
            <li class="col-sm-2 ml-5">
                <a href="../mascote/listagem.php" class="btn" style="background-color:#fd7162; list-style: none;">Mascotes</a>
            </li>
            <li class="col-sm-2 ml-5">
                <a href="../funcionario/listagem.php" class="btn" style="background-color:#fd7162; list-style: none;">Funcionários</a>
            </li>
            <li class="col-sm-2 ml-5">
                <a href="#" class="btn" style="background-color:#fd7162; list-style: none;">Login</a>
            </li>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>

<?php echo "<h4> Você está logado como, " .$usuario. "</4>"; 