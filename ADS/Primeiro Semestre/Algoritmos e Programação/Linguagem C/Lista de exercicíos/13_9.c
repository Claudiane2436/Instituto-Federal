// Faça um algoritmo que leia um conjunto de números (X) e imprima a
//quantidade de números pares (QPares) e a quantidade de números impares
//(QImpares) lidos. Admita que o valor 9999 é utilizado como sentinela para
//fim de leitura. Ex.: 1,2,3,4,5 => Pares=2 Impares=3

#include <stdio.h>
#include <locale.h>

main(){
setlocale(LC_ALL, "Portuguese");
int numero=0, soma_par=0, soma_imp=0;
while (numero !=9999){
  printf("Escreva um número:\n");
  scanf("%d", &numero);
  if(numero%2==0){
    soma_par++;
  }
  else{
    soma_imp++;
  }
}
printf("\nA quantidade de números pares é %d.\nA quantidade de números impares é %d.\n", soma_par, soma_imp-1);
}
