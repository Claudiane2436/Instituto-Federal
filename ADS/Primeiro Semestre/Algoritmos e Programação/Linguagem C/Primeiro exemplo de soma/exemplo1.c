#include<stdio.h>
#include <locale.h>
/*Coment�rio com v�rias linhas */
main () {
   int valor1, valor2, soma=0; //declara��o das vari�veis
   setlocale("LL_ALL","Portuguese");
   printf("Valor 1 =");
   scanf("%d", &valor1);
    printf("Valor 2 =");
   scanf("%d", &valor2);
   valor1 =2;
   valor2 = 78;
   soma = valor1 + valor2;

   printf("Soma = %d", soma); //%d: resultado de uma vari�vel de tipo inteiro
   printf("%d\n\n", soma);
}
