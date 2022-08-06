#include <stdio.h>
#include <locale.h>
int main()
{
    float vet[10];
    int i;
    for(i=0; i<10; i++){
        printf("\nPosicao %d é %x", i, &vet[i]);
    }
}
