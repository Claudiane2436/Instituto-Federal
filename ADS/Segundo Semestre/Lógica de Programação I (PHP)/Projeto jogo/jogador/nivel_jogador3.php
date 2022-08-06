<?php
session_start(); 
include "../tabuleiro.html";

$casa1=0;
$casa2=0;
echo "<br><br>".$_SESSION['nome']." está na casa ".$casa1."<br></p>";
echo "<br>".$_SESSION['jogador2']." está na casa ".$casa2."<br></p>";
do {
$dado1 =  rand(1,6);
$dado2 =  rand(1,6);
$passo1= $casa1+=$dado1;
$passo2= $casa2+=$dado2;
    echo "<br>Dado: ".$dado1;
    echo "<p class='cas'><br>".$_SESSION['nome']." foi para a casa ".$passo1."<br></p>";
    if(($passo1==2)||($passo1==15)||($passo1==23)||($passo1==28)||($passo1==36)){
        $casa1+=2;
        echo "<b>Avança mais 2 casas</b>";
        echo "<p class='cas'><br>".$_SESSION['nome']." foi para a casa ".$casa1."<br></p>";
        
    }
    if(($passo1==8)||($passo1==12)||($passo1==21)||($passo1==32)||($passo1==34)){
        $casa1+=0;
        echo "<b class='parado'>Ficou parada no mesmo lugar: ".$casa1."<br></b>";
        continue;
    }
    if(($passo1==5)||($passo1==11)||($passo1==18)||($passo1==27)||($passo1==35)){
        $casa1-=2;
        echo "<b class='volta'>Volta 2 casas</b>";
        echo "<p class='casa'><br>".$_SESSION['nome']." foi para a casa ".$casa1."<br></p>";
    }
    echo "<br>Dado: ".$dado2;
    echo "<p class='cas'><br>".$_SESSION['jogador2']." foi para a casa ".$passo2."<br></p>";
    
    if(($passo2==2)||($passo2==15)||($passo2==23)||($passo2==28)||($passo2==36)){
        $casa2+=2;
        echo "<b>Avança mais 2 casas</b>";
        echo "<p class='casa'><br>".$_SESSION['jogador2']." foi para a casa ".$casa2."<br></p>";
    }
    if(($passo2==8)||($passo2==12)||($passo2==21)||($passo2==32)||($passo2==34)){
        $casa2+=0;
        echo "<b class='parado'>Ficou parada no mesmo lugar: ".$casa2."<br></b>";
        continue;
    }
    if(($passo2==5)||($passo2==11)||($passo2==18)||($passo2==27)||($passo2==35)){
        $casa2-=2;
        echo "<b class='volta'>Volta 2 casas</b>";
        echo "<p class='cas'><br>".$_SESSION['jogador2']." foi para a casa ".$casa2."<br></p>";
    }
}while(($passo1<=40)&&($passo2<=40));

if($passo1>=40){
    echo "<h1><br>".$_SESSION['nome']." venceu a partida!!</h1>";
 }else{
     echo "<h1><br>".$_SESSION['jogador2']." venceu a partida!!</h1>";
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