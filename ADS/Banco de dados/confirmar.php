<?php 
 $id = filter_input(INPUT_GET, 'codigo', FILTER_SANITIZE_NUMBER_INT);
 echo "Deseja realmente encluir o registro!";
 echo "<a href='excluir.php?id=$id'>Sim |</a>";
 echo "<a href='listagem2.php'>Não</a>";

?>