<?php 
session_start();
echo "<h2> Sessão 1</h2>";
$_SESSION['produto'] = 'computador';
$_SESSION['nome'] = 'Marilia';
echo "<a href='pagina2.php'> Próxima</a>";

?>