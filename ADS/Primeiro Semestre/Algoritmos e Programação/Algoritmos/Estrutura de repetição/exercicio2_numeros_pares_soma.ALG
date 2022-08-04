Algoritmo "semnome"
// Construa um algoritmo que calcule a média aritmética de um conjunto de
//números pares que serão fornecidos pelo usuário. O valor de finalização será
//entrada do número 0. observe que nada impede que o usuário forneça quantos
//números  ímpares quiser, com a ressalva de que eles não poderão
//ser acumulados.
//
Var
 numero, somavezes: inteiro
 media, somapar: real


Inicio
  numero <- 1
  somavezes <- 0


  enquanto (numero <> 0) faca

      escreval("Digite um número: ")
      leia(numero)
        se (numero mod 2) = 0 entao
           somavezes <- somavezes + 1
           somapar <-somapar + numero
           media <- somapar/somavezes
           
        se(numero=0) entao
           somavezes<- somavezes-1
           somapar <-somapar + numero
           media <- somapar/somavezes
           fimse
           
        fimse

  fimenquanto
       escreval("A soma dos números pares são:", somapar)
       escreval("A media aritmética dos números pares são:", media)

Fimalgoritmo