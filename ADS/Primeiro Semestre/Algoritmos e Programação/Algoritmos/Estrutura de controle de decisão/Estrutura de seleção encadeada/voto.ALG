Algoritmo "semnome"
// Disciplina   : [Linguagem e L?gica de Programa??o]
// Professor   : Antonio Carlos Nicolodi 
// Descri??o   : Aqui voc? descreve o que o programa faz! (fun??o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 22/09/2021
Var
idade: inteiro


Inicio
  escreval ("Qual ? a sua idade?")
  leia(idade)
  se (idade< 16) entao
    escreval("N?o votam")
    
   senao
   se (idade >18) e (idade<65) entao
     escreval("O voto ? obrigat?rio")

    senao (idade >16) e (idade<18) ou (idade >65) entao
        escreval("O voto ? facultativo")


   fimse
fimse


Fimalgoritmo