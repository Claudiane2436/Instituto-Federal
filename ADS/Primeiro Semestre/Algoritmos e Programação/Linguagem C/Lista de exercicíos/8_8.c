// Faça um algoritmo que leia um número e divida-o por dois (sucessivamente)
//ate que o resultado seja menor que 1. Mostre o resultado da ultima divisão
// e a quantidade de divisões efetuadas.

#include <stdio.h>
#include <locale.h>

main(){
setlocale(LC_ALL, "Portuguese");
int contador;
float numero;
contador =0;
printf("Digite um número:\n");
scanf("%f", &numero);
do {
   numero=numero/2;
   contador++;
} while (numero>=1);
printf("O resultado da última divisão é %f.\nForam feitas %d divisões.\n", numero, contador);

}
