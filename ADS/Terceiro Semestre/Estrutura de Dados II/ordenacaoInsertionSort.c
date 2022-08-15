
#include <stdio.h>


void Ordena_insertionSort(int *vet, int n);

int main()
{
    printf("\n------------------ Ordenacao InsertionSort -------------------\n");
    int vet[10] = {250,290,210,280,200,270,220,230,240,260};
    int n=10, elem=0, i;
     printf("Vetor desordenado: ");
    for(i=0; i<n; i++){
        printf("%d ", vet[i]);
    }
     printf("\nVetor ordenado: ");
    Ordena_insertionSort(vet, n);
    for(i=0; i<n; i++){
        printf("%d ", vet[i]);
    }
}


void Ordena_insertionSort(int *vet, int n){
    int i, j, aux;
    for(i=1; i<n; i++){
        aux = vet[i];
        for(j=i; (j>0)&& (aux<vet[j-1]); j--){
            vet[j]= vet[j-1];
        }
        vet[j] = aux;
    }
    
}


