Algoritmo "semnome"
// Calcular a média aritmética de 5 alunos, considerando 4 notas com valor
//de 0 a 10 somente. Exibir a média de cada aluno e ao final exibir a
//media geral da turma.
Var
 contador: inteiro
 nota1, nota2, nota3, nota4, media, mediageral: real


Inicio
contador <- 1
  enquanto (contador <= 5) faca  //finalização da repetição
        escreval("A nota 1: ")
          leia(nota1)

           enquanto (nota1 < 0 ) ou (nota1 > 10)  faca

              escreval("Digite um número de 0 à 10")
              leia(nota1)
           fimenquanto
        escreval("A nota 2: ")
          leia(nota2)
          
           enquanto (nota2 < 0 ) ou (nota2 > 10)  faca

              escreval("Digite um número de 0 à 10")
              leia(nota2)
           fimenquanto
           
        escreval("A nota 3: ")
          leia(nota3)
          
          enquanto (nota3 < 0 ) ou (nota3 > 10)  faca

              escreval("Digite um número de 0 à 10")
              leia(nota3)
           fimenquanto
           
       escreval("A nota 4: ")
       leia(nota4)
     
       enquanto (nota4 < 0 ) ou (nota4 > 10)  faca

          escreval("Digite um número de 0 à 10")
          leia(nota4)
       fimenquanto
       
     media <- (nota1 + nota2+ nota3 + nota4)/ 4
     escreval("A nota do aluno = ", media)
     mediageral <- mediageral+media/5
     contador <- contador +1 //passo
fimenquanto
  escreval("A média geral da turma é: ", mediageral)
Fimalgoritmo