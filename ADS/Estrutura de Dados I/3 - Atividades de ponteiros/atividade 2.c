#include <stdio.h>
#include <locale.h>
int main()
{
    int num1, num2;
    int *p1, *p2;
    printf("Digite um numero:\n");
    scanf("%d", &num1);
    printf("Digite um numero:\n");
    scanf("%d", &num2);
    p1 = &num1;
    p2 = &num2;
    
    if(&p1>&p2){
        printf("\nO numero é %d", num1);
        printf("\nO endereco %x é maior que o endereco %x", &p1, &p2);
    }
    else{
        printf("\nO numero é %d", num2);
        printf("\nO endereco %x é maior que o endereco %x", &p2, &p1);
    }
}
