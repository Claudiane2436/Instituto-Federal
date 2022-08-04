Algoritmo "semnome"
// Idade do nadador
Var
idade: inteiro


Inicio
  escreval("Qual é a sua idade?")
  leia (idade)
  se (idade>=5) e (idade<=7) entao
    escreval("Pertece a categoria Infatil A")
    senao
    se (idade>=8) e (idade <=10) entao
       escreval("Pertence a categoria Infatil B")
     fimse
     se (idade>=11) e (idade<=13) entao
        escreval("Pertence a categoria Juvenil A")
     fimse
     se (idade>=14) e (idade<=17) entao
        escreval("Pertence a categoria Juvenil B")
      fimse
     se (idade>18) entao
     escreval("Pertence a categoria Adulto")
     fimse
  fimse


Fimalgoritmo