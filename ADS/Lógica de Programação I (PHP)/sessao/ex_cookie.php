<?php 
$cookie_name = "site";
$cookie_value = "Documentação PHP";
setcookie($cookie_name, $cookie_value, time()+ (86400*30));
if (!isset($_COOKIE[$cookie_name]))
{
   echo "O cookie'".$cookie_name. " 'não está definido!";
}else
{
    echo "O valor do cookie '".$cookie_name. "' é ".$_COOKIE['site'];
}

//a primeira que rodar vai dar que o cookie não existe, mas depois da segunda vez ele irá aparecer.

//Alterar o valor do cookie do exemplo anterior
$cookie_name = "site";
$cookie_value = "Consultando W3Schools";
setcookie($cookie_name, $cookie_value, time()+ (86400*30));
if (!isset($_COOKIE[$cookie_name]))
{
   echo "O cookie'".$cookie_name. " 'não está definido!";
}else
{
    echo "O valor do cookie '".$cookie_name. "' mudou para ".$_COOKIE['site'];
}

//excluir o cookie
setcookie($cookie_name, $cookie_value, time()-3600);


?>