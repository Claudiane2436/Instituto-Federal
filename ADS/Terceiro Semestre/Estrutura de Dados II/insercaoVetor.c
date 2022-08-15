
#include <stdio.h>


int buscaOrdenada(int *vet, int n, int elem);
void ordena_insertionSort(int *vet, int n);

int main()
{
    
    int vet[10] = {200,210,220,240,250,260,270,280,290};
    int n=10, elem=0, x=0;
    printf("Qual elemento deseja colocar no vetor?\n");
    scanf("%d", &x);
    vet[9] = x;
    ordena_insertionSort(vet, n);
    printf("Qual numero deseja consultar?\n");
    scanf("%d", &elem);
   
    elem = buscaOrdenada(vet, n, elem);
    if(elem==-1){
        printf("Nao foi encontrado o elemento");
        
    }
    else{
        printf("\nVetor: %d\nEncontrado na posicao %d", vet[elem], elem);
    }
    
    return 0;
}


int buscaOrdenada(int *vet, int n, int elem){
    int i;
    for(i=0; i<n; i++){
       
         if(elem ==vet[i]){
             return i;
         }
         else{
             if(elem <vet[i])
             return -1;
         }
     }
     return -1;
}

void ordena_insertionSort(int *vet, int n){
    int i, j, aux;
    for(i=1; i<n; i++){
        aux = vet[i];
        for(j = i; (j>0)&& (aux<vet[j-1]); j--){
            vet[j] =vet[j-1];
        }
        vet[j]=aux;
    }
}


