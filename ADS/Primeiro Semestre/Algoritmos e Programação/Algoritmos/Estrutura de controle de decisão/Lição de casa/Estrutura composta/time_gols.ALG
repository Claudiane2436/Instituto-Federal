Algoritmo "semnome"
//Faça um algoritmo para ler o nome de 2 times e o número de gols marcados na
//partida (para cada time). Escrever o nome do vencedor. Caso não haja
//vencedor deverá ser impressa a palavra EMPATE.
Var
 time1, time2: caracter
 gols1, gols2: inteiro


Inicio
  escreval("Qual é o nome do primeiro time?")
  leia(time1)
  escreval("Qual é o nome do segundo time?")
  leia(time2)
  escreval("Quantos gols fez o primeiro time?")
  leia(gols1)
  escreval("Quantos gols fez o segundo time?")
  leia(gols2)
  se (gols1>gols2) entao
    escreval("O time ", time1, " venceu a partida")
    senao se (gols2>gols1) entao
    escreval("O time ", time2, " venceu a partida")
    
    senao
    escreva("Teve um empate")
    
    fimse
fimse



Fimalgoritmo