// Fa�a um algoritmo para somar dois n�meros e multiplicar o resultado da soma
// pelo primeiro n�mero, em seguida exiba o resultado.

#include <stdio.h>
#include <locale.h>

main(){
int num1, num2, soma, multi;
setlocale(LC_ALL, "Portuguese");
printf("Digite um n�mero:\n");
scanf("%d", &num1);
printf("Digite outro n�mero: ");
scanf("%d", &num2);
soma = num1+num2;
multi = soma*num1;
printf("A soma dos dois n�meros �: %d\nA multiplica��o de %d pelo primeiro n�mero �: %d\n", soma, soma,multi);
}
