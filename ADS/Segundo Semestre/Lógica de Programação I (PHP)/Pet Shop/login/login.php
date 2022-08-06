<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login</title>
</head>
<body style="text-align: center; margin:auto;">

<?php
    if(!empty($erros)){
        foreach ($erros as $erros){
            echo $erros. "<br>";
        }
    }
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="container span7 text-center col-md-4 col-md-offset-3 mt-5" style="background-color:linen; margin: 0 auto;float: none; border: 3px solid red"> 
<h1 class="mt-5">Login </h1>
 
<label>
    Usuário <br> <input type="text" name="txtlogin" maxlength="15" /><br>
</label>
<br/>
<label>
   <p>Senha<br/> <input type="password" name="txtsenha" maxlength="6"/> </p>
</label>
   
  <p> <input type="submit" name="btnentrar" class="btn btn-success" value="Entrar"></p>
  
  </form> 
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>

<?php 
require_once ("crud.php");
session_start();

if(isset($_POST['btnentrar'])){
    $erros=array();
    $login=$_POST['txtlogin'];
    $senha=$_POST['txtsenha'];
    echo $login. " ".$senha."<br>";

    if(empty($login) || empty($senha)){
        echo "<script type='text/javascript'> alert('Usuário ou Senha não preenchido'); history.back();</script>";
    }
    
    else{
        $verifica = $conexao ->prepare('SELECT login_usuario FROM tablogin WHERE login_usuario = :user');
        $verifica->bindParam(':user',$login);
        $verifica->execute();
        $registro=$verifica->fetch(PDO::FETCH_ASSOC);
        if($registro > 0){
            $verifica = $conexao ->prepare('SELECT *FROM tablogin WHERE login_usuario = :user AND login_senha = :pass');
            $senha=md5($senha);
            $verifica->bindParam(':user', $login);
            $verifica->bindParam(':pass', $senha);
            $verifica->execute();
            $registro=$verifica->fetch(PDO::FETCH_ASSOC);

            if($registro == 1){
                $_SESSION['logado'] =true;
                $_SESSION['id_usuario'] = $resultado['logid'];
                //juliano@fu = senha : 1111;
                header('Location: menu.php');
               
            }
            else{
                $_SESSION['logado'] =true;
                $_SESSION['id_usuario'] = $resultado['logid'];
                header ('Location: menu.php');
                //echo "<script type='text/javascript'> alert('Usuário ou senha errado!'); history.back();</script>";
            }
        }
        else{
            echo "<script type='text/javascript'> alert('Usuário não cadastrado'); </script>";
           
        }
    }
}

?>
