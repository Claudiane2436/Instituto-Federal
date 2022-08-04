// Construa um progrma que, para um grupo de 50 valores inteiros, determine:
//a) A soma dos números positivos;
//b) A quantidade de valores negativos;

#include <stdio.h>
#include <locale.h>

main(){
setlocale(LC_ALL, "Portuguese");
int numero=0, contador, soma_posi=0, quantidade=0;
contador = 0;
while (contador<=49){
  printf("Digite um número:");
  scanf("%d", &numero);
  if (numero>1){
    soma_posi += numero ++;
  }
  else{
    quantidade++;
  }
  contador++;
}
printf("\nA soma dos números positivos é %d\nA quantidade de valores negativos é: %d.\n", soma_posi, quantidade);
}
