// Fa�a um algoritmo que leia um n�mero e divida-o por dois (sucessivamente)
//ate que o resultado seja menor que 1. Mostre o resultado da ultima divis�o
// e a quantidade de divis�es efetuadas.

#include <stdio.h>
#include <locale.h>

main(){
setlocale(LC_ALL, "Portuguese");
int contador;
float numero;
contador =0;
printf("Digite um n�mero:\n");
scanf("%f", &numero);
do {
   numero=numero/2;
   contador++;
} while (numero>=1);
printf("O resultado da �ltima divis�o � %f.\nForam feitas %d divis�es.\n", numero, contador);

}
