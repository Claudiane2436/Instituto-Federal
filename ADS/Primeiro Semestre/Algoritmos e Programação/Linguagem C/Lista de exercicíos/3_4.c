// Escreva um algoritmo para calcular e mostrar a metade de um número
//qualquer informado pelo usuário

#include <stdio.h>
#include <locale.h>

main(){
setlocale(LC_ALL, "Portuguese");
int numero;
printf("Digite um número:");
scanf("%d", &numero);
printf("A metade do número é %d", numero/2);
}
