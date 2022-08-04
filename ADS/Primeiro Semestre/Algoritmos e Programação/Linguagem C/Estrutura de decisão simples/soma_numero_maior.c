#include <stdio.h> // inclusão da biblioteca
#include <locale.h> //inclusão do idioma
 main() {
int num1, num2, media=0; //declaração das variáveis
setlocale(LC_ALL, "Portuguese"); //chamando a função do idioma e dizendo que é português
printf("Digite um número: ");
scanf("%d", &num1);
printf("Digite mais um número: ");
scanf("%d", &num2);
if (num1 >= num2) {
        printf("Subtração: %d\n", num1-num2);
               }
printf(" Soma = %d\n", num1+num2);  //%d: tipo de número, \n: pular linha
printf("Média = %d\n", (num1+num2)/2);
 }
