Algoritmo "semnome"
// Fazer um algoritmo para ler dois n?meros e um dos s?mbolos das opera??es:
// +, -, * e /. Imprimir o resultado da opera??o efetuada sobre os n?meros
// lidos. Use a estrutura de sele??o ESCOLHA .. CASO
Var
 numero1, numero2, opcao: inteiro


Inicio
  escreval("Digite o primeiro n?mero: ")
  leia(numero1)
  escreval("Digite o segundo n?mero: ")
  leia(numero2)
  escreval("Agora escolha 1(+), 2(-), 3(*), 4(/): ")
  leia(opcao)
  
  escolha(opcao)
  caso 1
      escreval("A soma dos n?meros s?o: ", numero1+numero2)

  caso 2
      escreval("A diminui??o dos n?meros s?o: ", numero1-numero2)
  caso 3
     escreval("A multiplica??o dos n?meros s?o: ", numero1*numero2)
  caso 4
     escreval("A divis?o dos  n?meros s?o: ", numero1/numero2)
  fimescolha


Fimalgoritmo