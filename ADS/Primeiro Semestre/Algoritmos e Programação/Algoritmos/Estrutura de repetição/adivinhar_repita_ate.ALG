Algoritmo "semnome"
// Faça um algoritmo, que permita o usuário acertar um número gerado de modo
//aleatório pelo computador.
Var
 numero, chute, tentativa: inteiro


Inicio
  numero <- randi(7)//tentantivas que o usuário terá para acertar
  tentativa <- 1
  repita
    escreval("Qual número você acha que é?")
    leia(chute)
    se(chute> numero) entao
       escreval("O número é menor")
     senao
       se(chute < numero) entao
          escreval("O número é maior")
          senao
            escreval("Parabéns você acertou! Tentativa ", tentativa)
            escreval("O número que adivinhou é:", numero)
       fimse
   fimse
   tentativa <- tentativa + 1
   ate (chute=numero)

Fimalgoritmo