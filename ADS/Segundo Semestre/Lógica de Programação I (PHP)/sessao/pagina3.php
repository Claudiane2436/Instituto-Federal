<?php 
session_start();
echo "Olá ".$_SESSION['nome'];//o erro que está correto porque terminou a sessão e não poderá exibir o que está armazenado em nome
echo "<h2>Sessão encerrada </h2>";

?>