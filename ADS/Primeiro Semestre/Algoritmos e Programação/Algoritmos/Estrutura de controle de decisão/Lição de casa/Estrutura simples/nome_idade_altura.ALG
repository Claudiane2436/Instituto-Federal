Algoritmo "semnome"
// Escreva um algoritmo  que receba nome, idade e altura,
//exiba somente o nome da pessoa com 1,70m e idade acima de 17 anos.
Var
 nome: caractere
 altura: real
 idade: inteiro


Inicio
  escreval("Qual é o nome da pessoa?")
  leia(nome)

  escreval("Qual é a altura?")
  leia(altura)

  escreval("Qual é a idade?")
  leia(idade)


  se (altura>1.70)e (idade>17) entao
    escreval(nome)
  fimse


Fimalgoritmo