#include <stdio.h>
#include <stdlib.h>
#include "calcular.h"

int main()
{
    int num1, num2, n, i;
    for(i=0; i<50; i++){
    printf("Digite um numero:\n");
    scanf("%d", &num1);
    printf("Digite o segundo numero:\n");
    scanf("%d", &num2);
    printf("Escolha a opcao:\n-1)Encerrar o programa\n 1)Somar os numeros\n 2)Subtrair os números\n 3)Multiplicar os numeros\n 4)Dividir os numeros\n 5)Resultado da ultima operacao\n");
    scanf("%d", &n);
    if(n==-1){
        break;
    }
    if(n ==1) {
    soma(num1, num2);
    printf("A soma dos números é %d\n", mais);

    }

    if(n ==2) {
    diminuir(num1, num2);
    printf("A subtracao dos números é %d\n", menos);

    }
    if(n ==3) {
    multiplicar(num1, num2);
    printf("A multiplicacao dos números é %d\n", multi);

    }
    if(n ==4) {
    dividir(num1, num2);
    printf("A divisao dos números é %d\n", divi);

    }
    if(n ==5){
        printf("O resultado da ultima operacao e" );

    }



}
}
