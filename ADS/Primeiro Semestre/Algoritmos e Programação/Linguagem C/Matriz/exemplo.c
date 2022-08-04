#include <stdio.h>
#include <locale.h>
main(){
   setlocale(LC_ALL, "Portuguese");
   float matriz[3][3], soma=0, soma_linha=0, soma_coluna=0, multi, exe, exe1, exe2;
   int i,j;

   for(i=0; i<3; i++){//linhas
    for(j=0; j<3; j++){
        printf("[%d][%d] = ", i,j);
        scanf("%f", &matriz[i][j]);
        soma += matriz[i][j];
        if(i==0){
          soma_linha += matriz[i][j];
        }
        if(j==0){
          soma_coluna+=matriz[i][j];
        }
        if(i==j){
          exe = matriz[0][0];
          exe1 = matriz[1][1];
          exe2 = matriz[2][2];
          multi = exe*exe1*exe2;
        }
      }

   }

for(i=0; i <3; i++){ //imprimir feito matriz
  for(j=0; j <3; j++){
  printf("%4.0f", matriz[i][j]);
}
printf("\n\n");
}

printf("\n\nSoma dos valores da matriz= %f", soma);
printf("\n\nSoma dos valores da linha “1”= %f", soma_linha);
printf("\n\nSoma dos valores da coluna “1”= %f", soma_coluna);
printf("\n\nMultiplicação dos valores da diagonal principal= %f\n\n", multi);
}
