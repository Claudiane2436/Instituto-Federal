Algoritmo "semnome"
// Fa?a um algoritmo, que permita o usu?rio acertar um n?mero gerado de modo
//aleat?rio pelo computador.
Var
 numero, chute, tentativa: inteiro


Inicio
  numero <- randi(7)//tentantivas que o usu?rio ter? para acertar
  tentativa <- 1
  repita
    escreval("Qual n?mero voc? acha que ??")
    leia(chute)
    se(chute> numero) entao
       escreval("O n?mero ? menor")
     senao
       se(chute < numero) entao
          escreval("O n?mero ? maior")
          senao
            escreval("Parab?ns voc? acertou! Tentativa ", tentativa)
            escreval("O n?mero que adivinhou ?:", numero)
       fimse
   fimse
   tentativa <- tentativa + 1
   ate (chute=numero)

Fimalgoritmo