
#include <stdio.h>

int buscaLinear(int *vet2, int n, int elem);
int buscaOrdenada(int *vet, int n, int elem);
int buscaBinaria(int *vet, int n, int elem);
int main()
{
    
    int vet[10] = {200,210,220,230,240,250,260,270,280,290};
    int vet2[10] = {320,380,340,310,360,300,330,350,370,390};
    int n=10, elem=0;
    printf("Qual numero deseja consultar na busca linear?\n");
    scanf("%d", &elem);
    elem = buscaLinear(vet2, n, elem);
    if(elem==-1){
        printf("Nao foi encontrado o elemento");
        
    }
    else{
        printf("\nVetor: %d\nEncontrado na posicao %d", vet2[elem], elem);
    }
    //printf("%d", buscaLinear(*vet2, n, elem));
    
    
    printf("\n\nQual numero deseja consultar na busca ordenada?\n");
    scanf("%d", &elem);
   
    elem = buscaOrdenada(vet, n, elem);
    if(elem==-1){
        printf("Nao foi encontrado o elemento");
        
    }
    else{
        printf("\nVetor: %d\nEncontrado na posicao %d", vet[elem], elem);
    }
    
    printf("\n\nQual numero deseja consultar na busca binaria?\n");
    scanf("%d", &elem);
   
    elem = buscaBinaria(vet, n, elem);
    if(elem==-1){
        printf("Nao foi encontrado o elemento");
        
    }
    else{
        printf("\nVetor: %d\nEncontrado na posicao %d", vet[elem], elem);
    }
    
    
    return 0;
}

int buscaLinear(int *vet2, int n, int elem){
     int i;
     for(i=0; i<n; i++){
         if(elem ==vet2[i]){
             return i;
         }
     }
     return -1;
     //printf("\n%d", elem);
     
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

int buscaBinaria(int *vet, int n, int elem){
    int i, inicio, meio, fim;
    inicio =0;
    fim = n-1;
    
    while(inicio <=fim){
        meio = (inicio +fim)/2;
        if(elem <vet[meio]){
            fim = meio -1;
        }else{
            if(elem >vet[meio]){
                inicio = meio +1;
            }else{
                return meio;
            }
        }
    }
    return -1;
}
