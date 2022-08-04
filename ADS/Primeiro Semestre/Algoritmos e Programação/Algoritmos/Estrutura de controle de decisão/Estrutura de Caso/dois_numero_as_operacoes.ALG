Algoritmo "semnome"
// Fazer um algoritmo para ler dois números e um dos símbolos das operações:
// +, -, * e /. Imprimir o resultado da operação efetuada sobre os números
// lidos. Use a estrutura de seleção ESCOLHA .. CASO
Var
 numero1, numero2, opcao: inteiro


Inicio
  escreval("Digite o primeiro número: ")
  leia(numero1)
  escreval("Digite o segundo número: ")
  leia(numero2)
  escreval("Agora escolha 1(+), 2(-), 3(*), 4(/): ")
  leia(opcao)
  
  escolha(opcao)
  caso 1
      escreval("A soma dos números são: ", numero1+numero2)

  caso 2
      escreval("A diminuição dos números são: ", numero1-numero2)
  caso 3
     escreval("A multiplicação dos números são: ", numero1*numero2)
  caso 4
     escreval("A divisão dos  números são: ", numero1/numero2)
  fimescolha


Fimalgoritmo