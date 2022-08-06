<?php 
#Criar um arquivo
//$arquivo = fopen("texto.txt", "w");

//if($arquivo== true)//verificar se o arquivo foi aberto corretamente
//{
 //echo "Arquivo criado com sucesso";
//}
//else
//{
   // echo "Falha ao criar o arquivo";
//}

#Adicionar contéudo ao arquivo
//$arquivo = fopen("texto.txt", "a");
//$conteudo = "Conteúdo para teste\r\n"; // \r\n pular linha dentro do arquivo
//fwrite($arquivo, $conteudo);
//fclose($arquivo);


#Exibir o contéudo do arquivo
//$arquivo = fopen("texto.txt", "r");
//if($arquivo ==true){
    //echo "Leitura ou abertura do arquivo, com sucesso!";

//}
//else {
    //echo "Falha ao abrir o arquivo";
//}
//while(!feof($arquivo)){ //primeiro jeito
   // echo fgets($arquivo)."<br>";
//}
//$texto = file_get_contents("texto.txt"); //segundo jeito
//echo $texto;
//fclose($arquivo);

#Alterar o conteúdo do arquivo
$arquivo = fopen("texto.txt", "r+");
$string = "";
if($arquivo == true)
{
 while(true){
    $linha = fgets($arquivo);
    if($linha == NULL){
        break;
    }
    if(preg_match("/teste/", $linha)){//procurar uma palavra dentro do arquivo
        $string .= str_replace("teste", "texto", $linha); //trocar a palavra teste por texto no arquivo/variavel linha
    }
    else{//se não continue do jeito que está
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