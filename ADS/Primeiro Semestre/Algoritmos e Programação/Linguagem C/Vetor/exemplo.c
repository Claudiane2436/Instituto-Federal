#include <stdio.h>
#include <locale.h>
/*Armazenar 6 números inteiros no velor. Limpar a tela exibir: os 6 valores inseridos no vetor, a soma dos valores */
main(){
  int vetor[6], soma = 0, i;
  float media;
  setlocale(LC_ALL, "Portuguese");
  for(i = 0; i < 6; i++){
	printf("[%d] = ", i);
	scanf("%d",&vetor[i]);
	soma += vetor[i];
  }
  system("cls");//limpar a tela
  printf("\n\n************ VALORES DO VETOR ******************\n\n");
  for(i = 0; i < 6; i++){
	printf("[%d] = %d\n", i, vetor[i]);
  }
  media = soma / 6;
  printf("\n Soma = %d\n", soma);
  printf("\n Média = %.2f\n", media);
}

