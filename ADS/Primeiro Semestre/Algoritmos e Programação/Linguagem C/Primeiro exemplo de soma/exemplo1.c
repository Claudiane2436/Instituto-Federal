#include<stdio.h>
#include <locale.h>
/*Comentário com várias linhas */
main () {
   int valor1, valor2, soma=0; //declaração das variáveis
   setlocale("LL_ALL","Portuguese");
   printf("Valor 1 =");
   scanf("%d", &valor1);
    printf("Valor 2 =");
   scanf("%d", &valor2);
   valor1 =2;
   valor2 = 78;
   soma = valor1 + valor2;

   printf("Soma = %d", soma); //%d: resultado de uma variável de tipo inteiro
   printf("%d\n\n", soma);
}
