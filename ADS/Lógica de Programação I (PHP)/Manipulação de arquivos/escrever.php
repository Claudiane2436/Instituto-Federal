<?php 
$nome = $_POST['txtNome'];
$msg = $_POST['txtMsg'];
$conteudo = $msg."\r\n".$nome."\r\n";

$arquivo = fopen("visitas.txt", "a");
fwrite($arquivo, $conteudo);
echo "<h5> Mensagem gravada com sucesso:</h5> <em>$conteudo</em>";
fclose($arquivo);

?>
<h4><a href="exemplo1.html">Voltar </h4>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form method="post" action="alterar.php">
        <h3>Alterar o arquivo </h3>
         <label>  
            <br>  Trocar: <br/> 
            <input type="text" name="txtMsg" maxlength="10" size="50" placeholder="Coloque a palavra">
        </label>
        <label> 
           <br> <br>Por: <br>
            <input type="text" name="txtTroca" maxlength="10" size="50" placeholder="Coloque a palavra">
        </label>
        <p><input type="submit" value="Alterar"></p>
</form>
</body>
</html>
