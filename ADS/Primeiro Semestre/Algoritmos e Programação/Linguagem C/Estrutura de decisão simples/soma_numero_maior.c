#include <stdio.h> // inclus�o da biblioteca
#include <locale.h> //inclus�o do idioma
 main() {
int num1, num2, media=0; //declara��o das vari�veis
setlocale(LC_ALL, "Portuguese"); //chamando a fun��o do idioma e dizendo que � portugu�s
printf("Digite um n�mero: ");
scanf("%d", &num1);
printf("Digite mais um n�mero: ");
scanf("%d", &num2);
if (num1 >= num2) {
        printf("Subtra��o: %d\n", num1-num2);
               }
printf(" Soma = %d\n", num1+num2);  //%d: tipo de n�mero, \n: pular linha
printf("M�dia = %d\n", (num1+num2)/2);
 }
