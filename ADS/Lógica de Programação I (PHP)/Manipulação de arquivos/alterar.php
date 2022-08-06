<?php 
$ms = $_POST['txtMsg'];
$troca = $_POST['txtTroca'];
$arquivo = fopen("regra.txt", "r+");
$string = "";
if($arquivo == true)
{
 while(true){
    $linha = fgets($arquivo);
    if($linha == NULL){
        break;
    }
    if(preg_match('/txtTroca/', $linha)){
        $string .= str_replace( $ms,  $troca,  $linha); 
    }
    else{
        $string .= $linha;
    }
 }
 
 ftruncate($arquivo, 0);
    if(fwrite($arquivo, $string)){
        echo "Atualizado com sucesso!";
    }
    else{
        echo "Não foi possível atualizar o arquivo";
    }
    fclose($arquivo);
}

?>

<hr />
<h4> 
    <a href="leitura.php" target ="_self"> Lendo o arquivo</a>
</h4>