<?php 
declare(strict_types=1);//a declaração obriga que o tipo do dado seja int ou float se colocar errado o programa não irá fazer o calculo
function exibirMensagem()
{
    echo "Sejam Bem-vindos(as)!!<br>";
}
for($i=1; $i <=5; $i++)
{
    exibirMensagem();
}

echo "<br>";

//função exibir mensagem com parametro
function mostraMensagem($mensagem)
{
    echo $mensagem."<br>";
}
$mensagem2 = "Linguagem de Programação I";
mostraMensagem($mensagem2);

echo "<br>";

//função somar dois números, tendo dois parametros. Função que não retorna
function somar(int $valor1, int $valor2)
{
   $resultado = $valor1 + $valor2;
   echo "$valor1 + $valor2 = $resultado";
}

somar(8, 14);

//função com retorno
function multiplicar(int $valor1, float $valor2)
{
   $resultado = $valor1 * $valor2;
   return $resultado;
}

$calculo = multiplicar(25, 2.5);
echo "<br>Resultado = $calculo<br>";

echo "<br>";
//parametro com valor padrão
function atribuir(int $minino = 10)
{
  echo "O valor é $minino <br>";
}

atribuir(256);
atribuir();

echo "<br>";

//escopo das variaveis (globais e local)
//escopo local 
function exibirValor()
{
    $a =100;
    echo "A = " .$a."<br>";
}
exibirValor();

echo "<br>";

//escopo global
$a = 100;
function exibirNumero()
{
    global $a;
    echo "A = " .$a."<br>";
}
exibirNumero();
echo "<br>";

//passagem de parametros por referência e por valor
//parâmetro por valor
$cont = 1;
function incremetar($numero)
{
    $numero ++;
    echo "Número = $numero <br>";
}

incremetar($cont);
echo "Valor de cont = $cont";

//parâmetro por referência
$cont = 1;
function incremetar2(&$numero)
{
    $numero +=10;
    echo "<br> <br>Número = $numero <br>";
}

incremetar2($cont);
echo "Valor de cont = $cont";

?>