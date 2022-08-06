<?php 
require "crud.php";

$id = filter_input(INPUT_GET, 'id');

if($id){
    $sql = $conexao ->prepare("DELETE FROM tblusuarios WHERE usuid = :id");
    $sql ->bindValue(':id', $id);
    $sql ->execute();
    echo "<h2>Excluído com sucesso</h2>";
    
}
else{
    echo "Não foi possível excluir";
}
echo "<h3><a href='listagem2.php'>Voltar</a> </3>";

?>