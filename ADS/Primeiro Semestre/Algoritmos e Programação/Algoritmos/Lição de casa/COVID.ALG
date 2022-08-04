Algoritmo "covid"
// Disciplina   : [Linguagem e Lógica de Programação]
//Faça um algoritmo  que receba o total de casos de COVID-19 no
// Brasil e de todas as regiões do
Var
total, regiao_sul, regiao_norte, regiao_centro, regiao_nordeste, regiao_sudeste:real
caso1, caso2, caso3, caso4, caso5:real


Inicio

  total <-20900000
  regiao_sul<-438570
  regiao_norte<-1802069
  regiao_centro<-1720000
  regiao_nordeste<-15365000
  regiao_sudeste<-7576800
  caso1 <-regiao_sul/total*100
  caso2 <-regiao_norte/total*100
  caso3 <-regiao_centro/total*100
  caso4 <-regiao_nordeste/total*100
  caso5 <-regiao_sudeste/total*100

  escreval("O total de casos é: ", total)
  escreval("A região Sul do brasil tem o total de", regiao_sul, " casos e a porcentagem correspondente é :", caso1, "%")
  escreval("A região Norte do brasil tem o total de", regiao_norte, " casos e a porcentagem correspondente é :", caso2, "%")
  escreval("A região Centro-oeste do brasil tem o total de", regiao_centro, " casos e a porcentagem correspondente é :", caso3, "%")
  escreval("A região Nordeste do brasil tem o total de", regiao_nordeste, " casos e a porcentagem correspondente é :", caso4, "%")
  escreval("A região Sudeste do brasil tem o total de", regiao_sudeste, " casos e a porcentagem correspondente é :", caso5, "%")


Fimalgoritmo