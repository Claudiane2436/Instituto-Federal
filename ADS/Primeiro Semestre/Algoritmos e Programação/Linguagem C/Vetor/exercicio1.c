#include <stdio.h>
#include <locale.h>
main(){
  setlocale(LC_ALL, "Portuguese");
  int numero[6];
  int i, conta_neg=0, cont_par=0, cont_impar=0;
  for(i=0; i<6; i++){
 	printf("[%d] = ",i);
 	scanf("%d",&numero[i]);
  }
  system("cls");
  //exibindo os valores
  for(i=0; i<6; i++){
	printf("\n\n %d - ", numero[i]);
  }
  printf("\n\n");
  for(i=0; i<6; i++){
   if(numero[i] % 2 == 0){
	printf("%d", numero[i]);
	cont_par++;
   }
   else{
    printf("%d", numero[i]);
    cont_impar++;
   }

 }

 printf("\nNúmeros pares digitados = %d\n\n",cont_par);
 printf("\nNúmeros impares digitados = %d\n\n",cont_impar);
}

