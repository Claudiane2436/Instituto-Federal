<?php 
session_start();
echo "Olá ".$_SESSION['nome'].", o produto escolhido ".$_SESSION['produto'];
echo "<p><a href='pagina1.php'> Sessão 1 </a>";
session_unset();
session_destroy();
echo "<br> <a href='pagina3.php'> Finalizar</a>";

?>