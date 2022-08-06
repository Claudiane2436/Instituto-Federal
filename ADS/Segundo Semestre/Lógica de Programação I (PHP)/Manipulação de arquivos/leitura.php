<?php 
$arquivo = fopen("visitas.txt", "r");

while(!feof($arquivo)){
    echo fgets($arquivo);
    echo "<br>".fgets($arquivo);
    echo "<br><br>";

}
fclose($arquivo);

?>
<hr />
<h4> 
    <a href="visitas.html" target ="_self"> Início</a>
</h4>