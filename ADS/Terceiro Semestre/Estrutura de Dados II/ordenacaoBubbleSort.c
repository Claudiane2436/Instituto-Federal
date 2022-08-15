
#include <stdio.h>


void Ordena_bubbleSort(int *vet, int n);

int main()
{
    printf("\n------------------ Ordenacao BubbleSort -------------------\n");
    int vet[10] = {250,290,210,280,200,270,220,230,240,260};
    int n=10, elem=0, i;
     printf("Vetor desordenado: ");
    for(i=0; i<n; i++){
        printf("%d ", vet[i]);
    }
     printf("\nVetor ordenado: ");
    Ordena_bubbleSort(vet, n);
    for(i=0; i<n; i++){
        printf("%d ", vet[i]);
    }
}


void Ordena_bubbleSort(int *vet, int n){
    int i, continua, aux, fim =n;
    do{
        continua =0;
        for(i =0; i<fim -1; i++){
            if(vet[i]>vet[i+1]){
                aux = vet[i];
                vet[i] = vet[i+1];
                vet[i+1] =aux;
                continua = 1;
            }
        }
        fim--;
    }while(continua !=0);
    
}


