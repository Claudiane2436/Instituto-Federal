Algoritmo "semnome"
// Faça um algoritmo para ler: a descrição do produto (nome), a quantidade
//adquirida e o preço unitário. Calcular e escrever o total
//(total = quantidade adquirida * preço unitário), o desconto e o total a
//pagar (total a pagar = total - desconto), sabendo-se que:
//- Se quantidade <= 5 o desconto será de 2%
//- Se quantidade > 5 e quantidade <=10 o desconto será de 3%
//- Se quantidade > 10 o desconto será de 5%

Var
produto: caracter
quantidade: inteiro
preco, total, desconto, pagar: real


Inicio
  escreval("Qual é o produto?")
  leia(produto)
  escreval("Quantos produtos pegou?")
  leia(quantidade)
  escreval("Qual é o preço da cada produto?")
  leia(preco)
  se (quantidade <= 5) entao
      total <-preco*quantidade
      desconto <- total*(2/100)
      pagar <- total -desconto
      escreva ("O total a pagar será ", pagar)
      senao
        se (quantidade >5) e (quantidade <=10) entao
        total <-preco*quantidade
          desconto <- total * (3/100)
          pagar <- total- desconto
          escreva("O total a pagar será ", pagar)
      senao
      total <-preco*quantidade
      desconto <- total*(5/100)
      pagar <- total -desconto
      escreva("O total a se pagar será ", pagar)
      fimse
  fimse


Fimalgoritmo