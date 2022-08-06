<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background-color:lightgray; text-align: center; margin:auto;">
   
   <form action="cadastrar_action.php" method="post" class="container span7 text-center col-md-4 col-md-offset-3 mt-5" style="background-color:linen; margin: 0 auto;float: none;">
   <h1 class="mt-5">Cadastrar Login</h1>   
      <label>
         <p>Usuário: <input type="text" name="txtusu"></p>
      </label>
      <br>
      <label>
         <p>Senha: <input type="password" name="txtsenha"></p>
      </label>
        
      <p><input type="submit" class="btn btn-success mb-3" value="Cadastrar"></p>
   </form>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>