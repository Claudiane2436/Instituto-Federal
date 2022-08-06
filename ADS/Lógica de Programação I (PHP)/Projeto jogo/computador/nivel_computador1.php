<?php
session_start(); 
include "../tabuleiro.html";
$jogador = "Computador";



$casa1=0;
$casa2=0;
echo "<br><br>".$_SESSION['nome']." está na casa ".$casa1."<br>";
echo "<br>".$jogador." está na casa ".$casa2."<br>";
do {
$dado1 =  rand(1,6);
$dado2 =  rand(1,6);
$passo1= $casa1+=$dado1;
$passo2= $casa2+=$dado2;
    echo "<br>Dado: ".$dado1;
    echo "<br><p class='cas'>".$_SESSION['nome']." foi para a casa ".$passo1."<br></p>";
    if(($passo1==2)||($passo1==15)||($passo1==23)||($passo1==28)||($passo1==36)){
        $casa1+=2;
        echo "<b><br>Avança mais 2 casas</b>";
        echo "<br><p class='cas'><br>".$_SESSION['nome']." foi para a casa ".$casa1."</p><br>";
        
    }
    echo "<br>Dado: ".$dado2;
    echo "<br><p class='cas'><br>".$jogador." foi para a casa ".$passo2."</p><br>";
    
    if(($passo2==2)||($passo2==15)||($passo2==23)||($passo2==28)||($passo2==36)){
        $casa2+=2;
        echo "<b><br>Avança mais 2 casas</b>";
        echo "<br><p class='cas'><br>".$jogador." foi para a casa ".$casa2."</p><br>";
    }
}while(($passo1<=40)&&($passo2<=40));

if($passo1>=40){
    echo "<h1><br>".$_SESSION['nome']." venceu a partida!!</h1>";
 }else{
     echo "<h1><br>".$jogador." venceu a partida!!</h1>";
    
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    
</body>
</html>