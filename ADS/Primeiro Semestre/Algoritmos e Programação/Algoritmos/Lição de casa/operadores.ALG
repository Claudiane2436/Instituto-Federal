Algoritmo "semnome"
// Utilizar os operadores relacionais  e lógicos para dois valores
//(valor1, valor2).

Var
numero1, numero2: inteiro
resultado, resultado2, resultado3, resultado4, resultado5, R: logico


Inicio
  numero1 <-5
  numero2 <-3
  resultado <-numero1=numero2
  resultado2<-numero1>numero2 e numero1=numero2
  resultado3<-numero2<numero1 e numero1=numero2
  resultado4<-numero1<>numero1 e numero1=numero2
  resultado5<-numero2>numero1 e numero2<>numero1
  R<- (numero1 < numero2) e (numero1 = numero2)
   
  escreval("Operadores Relacionais")
  escreval(numero1, " =", numero2, "?", resultado)
  escreval( " 5 <> 3?", numero1<>numero2)
  escreval(" 5 > 3?", numero1>numero2)
  escreval(" 5 < 3?", numero1<numero2)
  escreval(" 5 >= 3?", numero1>=numero2)
  escreval(" 5 <= 3?", numero1<=numero2)
  escreval(" 5 > 3 E 5 = 3?", resultado2)
  escreval(" 5 < 3 E 5 = 3?", resultado3)
  escreval(" 5 <> 3 E 5 = 3?", resultado4)
  escreval(" 5 > 3 E 5 <> 3?", resultado5)
  escreval(" 5 > 3 ou 5 = 3?", resultado5)
  escreval(" 5 < 3 ou 5 <> 3?", resultado5)
  escreval(" 5 = 3 ou 5 <= 3?", resultado4)
  escreval(" 5 <> 3 ou 5 < 3?", resultado5)
  escreval(numero1, " <", numero2,  " e", numero1 , " =", numero2, "?", R)
  escreval(" não não 5 ou não não 3?", resultado4)

Fimalgoritmo