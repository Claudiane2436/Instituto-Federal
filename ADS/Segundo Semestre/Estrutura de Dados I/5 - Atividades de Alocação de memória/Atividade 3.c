#include <stdio.h>
#include <stdlib.h>

int main()
{
    int linhas =2, colunas=2, i, j, soma_lin, soma_lin2, soma_col, soma_col2, m;
    int **matriz;
    matriz = (int**) malloc(linhas * sizeof(int*));
    for(m=0; m<2; m++){
    for (i=0; i<linhas; i++) {
          printf("Qual é o valor da %d linha?\n", i+1);
    scanf("%d", &matriz[i]);
    if(i==0){
        soma_lin +=matriz[i];
    }
      if(i==1){
          soma_lin2 +=matriz[i];
      }
    }
    for (j=0; j<linhas; j++){
   printf("Qual é o valor da %d coluna?\n", j+1);
    scanf("%d", &matriz[j]);
    if(j==0){
        soma_col += matriz[j];
    }
    if(j==1){
        soma_col2 += matriz[j];
    }
        
    }
        
    }
    
    printf("A soma das colunas %d, %d", soma_col, soma_col2);
    printf("\nA soma das linhas %d, %das", soma_lin, soma_lin2);
    
}