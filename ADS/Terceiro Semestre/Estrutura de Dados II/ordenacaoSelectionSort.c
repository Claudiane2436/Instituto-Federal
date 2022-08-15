
#include <stdio.h>


void Ordena_selectionSort(int *vet, int n);

int main()
{
    printf("\n------------------ Ordenacao SelectionSort -------------------\n");
    int vet[10] = {250,290,210,280,200,270,220,230,240,260};
    int n=10, elem=0, i;
     printf("Vetor desordenado: ");
    for(i=0; i<n; i++){
        printf("%d ", vet[i]);
    }
     printf("\nVetor ordenado: ");
    Ordena_selectionSort(vet, n);
    for(i=0; i<n; i++){
        printf("%d ", vet[i]);
    }
}


void Ordena_selectionSort(int *vet, int n){
    int i, j, menor, troca;
    for(i =0; i<n-1; i++){
        menor =i;
        for(j=i+1; j<n; j++){
            if(vet[j]<vet[menor]){
                menor =j;
            }
        }
        if(i!=menor){
            troca = vet[i];
            vet[i] = vet[menor];
            vet[menor] = troca;
        }
    }
    
}


