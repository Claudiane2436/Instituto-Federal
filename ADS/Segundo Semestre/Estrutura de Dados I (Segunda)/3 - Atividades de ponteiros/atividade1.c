#include <stdio.h>
void modificar(int p1, int p2, int p3, int*valor1, int*valor2, int*valor3);
int main()
{
    int num1, num2, num3, valor1, valor2, valor3;
    int *p1, *p2, *p3;
    printf("Digite um número:\n");
    scanf("%d", &num1);
    printf("Digite um número:\n");
    scanf("%d", &num2);
    printf("Digite um número:\n");
    scanf("%d", &num3);
    p1 = &num1;
    p2 = &num2;
    p3 = &num3;
    modificar(*p1, *p2, *p3, &valor1, &valor2, &valor3);
    printf("\nO primeiro número: %d", valor1);
    printf("\nO segundo número: %d", valor2);
    printf("\nO terceiro número %d", valor3);
}

void modificar(int p1, int p2, int p3, int*valor1, int*valor2, int*valor3){
    *valor1 = p1+100;
    *valor2 = p2+100;
    *valor3 = p3+100;

}