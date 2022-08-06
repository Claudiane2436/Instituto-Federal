<?php
//session_start();
//$login=$_POST['txtusu'];
//if($login=='@fu'){
   //header ('Location: menu.php');se o login tiver @fu não pode acessar tela do funcionario e login
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background-color:lightgray; text-align: center; margin:auto;">
   
   <form action="cadastrar_action.php" method="post" class="container span7 text-center col-md-4 col-md-offset-3 mt-5"   style="background-color:linen; margin: 0 auto;float: none;">
   <h1>Cadastrar Funcionário</h1>
      <label>
         <p>Nome: <input type="text" name="txtnome"></p>
      </label>
      <label> 
   
      <label>
         <p>Data: <input type="text" name="txtdata"></p>
      </label>
      <br>
      <label>
         <p>CPF: <input type="text" name="txtcpf"></p>
      </label>
      <br>
      <label>
         <p>Endereço: <input type="text" name="txtende"></p>
      </label>
    
      <label> 
          <p>Número: <input type="number" name="txtnumero"> </p>
      </label>
      
      <label>
         <p>Cidade: <input type="text" name="txtcida"></p>
      </label>
      <br>
      <label> 
          <p>CP: <input type="text" name="txtcp"> </p>
      </label>
      <br>
      <label> 
          <p>Telefone: <input type="text"  name="txttelefone"> </p>
      </label>
        
      <p><input type="submit" class="btn btn-success" value="Cadastrar"></p>
   </form>
</body>