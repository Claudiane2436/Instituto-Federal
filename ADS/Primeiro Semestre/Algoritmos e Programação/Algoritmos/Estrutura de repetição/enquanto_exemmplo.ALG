Algoritmo "semnome"
// Receber 10 e somar. Exibir o resultado da soma.
Var
  numero, soma, contador: inteiro


Inicio
  contador <-1
  enquanto (contador <= 10) faca
    escreva("Número = ")
    leia(numero)
    soma <- soma + numero //variavel acumuladora
    contador <- contador + 1
  fimenquanto
 escreval("Soma: ", soma)

Fimalgoritmo