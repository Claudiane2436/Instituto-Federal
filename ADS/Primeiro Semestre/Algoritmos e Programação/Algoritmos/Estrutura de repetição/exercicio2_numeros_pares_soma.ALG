Algoritmo "semnome"
// Construa um algoritmo que calcule a m?dia aritm?tica de um conjunto de
//n?meros pares que ser?o fornecidos pelo usu?rio. O valor de finaliza??o ser?
//entrada do n?mero 0. observe que nada impede que o usu?rio forne?a quantos
//n?meros  ?mpares quiser, com a ressalva de que eles n?o poder?o
//ser acumulados.
//
Var
 numero, somavezes: inteiro
 media, somapar: real


Inicio
  numero <- 1
  somavezes <- 0


  enquanto (numero <> 0) faca

      escreval("Digite um n?mero: ")
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
       escreval("A soma dos n?meros pares s?o:", somapar)
       escreval("A media aritm?tica dos n?meros pares s?o:", media)

Fimalgoritmo