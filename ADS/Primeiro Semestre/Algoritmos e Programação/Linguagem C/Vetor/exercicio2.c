#include <stdio.h>
#include <locale.h>

main(){
setlocale(LC_ALL, "Portuguese");

  int numero[5];
  int i, menor=0, maior=0, soma=0;
  float media=0;

  for(i=0; i<5; i++){
 	printf("[%d] = ",i);
 	scanf("%d",&numero[i]);
 	soma += numero[i];
 	if(i==0){
        maior=numero[i];
        menor=numero[i];
    }
    if(numero[i]>maior){
        maior=numero[i];
      }
      else{
        if(numero[i]<menor){
            menor=numero[i];
        }
      }

  }

  system("cls");
  //exibindo os valores
  for(i=0; i<5; i++){
	printf("\n\n %d - ", numero[i]);
  }
  media = soma / 5;
  printf("\nMaior = %d\n\n",maior);
  printf("\nMenor = %d\n\n",menor);
  printf("\nMédia = %f\n\n",media);

}
