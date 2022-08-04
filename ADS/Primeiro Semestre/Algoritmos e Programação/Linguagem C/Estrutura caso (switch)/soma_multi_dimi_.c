#include <stdio.h>
#include <locale.h>



main(){

setlocale(LC_ALL, "Portuguese");
int num1, num2, opcao, soma, sub, mul, divi;
   printf("Digite o número:");
   scanf("%d", &num1);
   printf("Digite outro número:");
   scanf("%d", &num2);
   printf("Escola a opção\n");
   printf(" 1 - Somar\n ");
   printf("2 - Subtração\n ");
   printf("3 - Multiplicação\n ");
   printf("4 - Divisão\n ");
   scanf("%d", &opcao);

  switch(opcao){
    case 1:
    soma = num1+num2;
    printf("%d + %d = %d", num1, num2, soma);
    break;
    case 2:
    sub = num1-num2;
    printf("%d - %d = %d", num1, num2, sub);
    break;
    case 3:
    mul = num1*num2;
    printf("%d * %d = %d", num1, num2, mul);
    break;
    case 4:
    divi = num1/num2;
    printf("%d / %d = %d", num1, num2, divi);
    break;
    default:
    printf("Opção Inválida");
    break;

  }
}
