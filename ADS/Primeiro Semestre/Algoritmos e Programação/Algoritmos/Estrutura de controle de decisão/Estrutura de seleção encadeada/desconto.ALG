Algoritmo "semnome"
// Fa?a um algoritmo para ler: a descri??o do produto (nome), a quantidade
//adquirida e o pre?o unit?rio. Calcular e escrever o total
//(total = quantidade adquirida * pre?o unit?rio), o desconto e o total a
//pagar (total a pagar = total - desconto), sabendo-se que:
//- Se quantidade <= 5 o desconto ser? de 2%
//- Se quantidade > 5 e quantidade <=10 o desconto ser? de 3%
//- Se quantidade > 10 o desconto ser? de 5%

Var
produto: caracter
quantidade: inteiro
preco, total, desconto, pagar: real


Inicio
  escreval("Qual ? o produto?")
  leia(produto)
  escreval("Quantos produtos pegou?")
  leia(quantidade)
  escreval("Qual ? o pre?o da cada produto?")
  leia(preco)
  se (quantidade <= 5) entao
      total <-preco*quantidade
      desconto <- total*(2/100)
      pagar <- total -desconto
      escreva ("O total a pagar ser? ", pagar)
      senao
        se (quantidade >5) e (quantidade <=10) entao
        total <-preco*quantidade
          desconto <- total * (3/100)
          pagar <- total- desconto
          escreva("O total a pagar ser? ", pagar)
      senao
      total <-preco*quantidade
      desconto <- total*(5/100)
      pagar <- total -desconto
      escreva("O total a se pagar ser? ", pagar)
      fimse
  fimse


Fimalgoritmo