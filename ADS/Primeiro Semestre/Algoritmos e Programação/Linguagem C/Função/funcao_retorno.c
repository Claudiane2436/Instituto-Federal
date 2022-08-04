#include <stdio.h>
#include <locale.h>

int soma (int valor1, int valor2){
  return valor1+valor2;
}

main(){
  int n;
  n = soma(2,3);
printf("Soma = %d", n);
putchar('\n');
}
