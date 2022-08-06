<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type ="text/css" href="./css/estilos.css">
    <title>Exemplo - Include e require</title>
</head>
<body>
    <?php 
       // include "cabecalho.html";
        //include "principal.php";
        //include "rodape.html";

        require "cabecalho.html";
        require "principal.php";
        require "rodape.html";
    ?>
</body>
</html>