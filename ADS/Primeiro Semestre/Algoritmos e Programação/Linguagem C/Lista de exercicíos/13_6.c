// Faça um algoritmo para somar dois números e multiplicar o resultado da soma
// pelo primeiro número, em seguida exiba o resultado.

#include <stdio.h>
#include <locale.h>

main(){
int num1, num2, soma, multi;
setlocale(LC_ALL, "Portuguese");
printf("Digite um número:\n");
scanf("%d", &num1);
printf("Digite outro número: ");
scanf("%d", &num2);
soma = num1+num2;
multi = soma*num1;
printf("A soma dos dois números é: %d\nA multiplicação de %d pelo primeiro número é: %d\n", soma, soma,multi);
}
