// Escreva um algoritmo para calcular e mostrar a metade de um n�mero
//qualquer informado pelo usu�rio

#include <stdio.h>
#include <locale.h>

main(){
setlocale(LC_ALL, "Portuguese");
int numero;
printf("Digite um n�mero:");
scanf("%d", &numero);
printf("A metade do n�mero � %d", numero/2);
}
