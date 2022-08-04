Algoritmo "semnome"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 22/09/2021
Var
idade: inteiro


Inicio
  escreval ("Qual é a sua idade?")
  leia(idade)
  se (idade< 16) entao
    escreval("Não votam")
    
   senao
   se (idade >18) e (idade<65) entao
     escreval("O voto é obrigatório")

    senao (idade >16) e (idade<18) ou (idade >65) entao
        escreval("O voto é facultativo")


   fimse
fimse


Fimalgoritmo