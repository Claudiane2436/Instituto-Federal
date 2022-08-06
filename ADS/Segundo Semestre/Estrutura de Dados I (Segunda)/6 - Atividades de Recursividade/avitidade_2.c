
#include <stdio.h>
#include <stdlib.h>

int numero_iterativo (int n);
int func(int n);

int
main ()
{
  int i, num =0, op, resul, resul2;
  printf ("Digite um numero:\n");
  scanf ("%d", &num);
  printf("Qual modo deseja usar para calcular?\n 1) Modo Iterativo\n 2) Modo Recursivo\n");
  scanf("%d", &op);
  if(op == 1){
      resul = numero_iterativo (num);
      printf("%d", resul);
  }
  
  else if( op==2){
       printf ("Versao recursivo: \n");
      resul2 = func (num);
      printf("%d", resul2);
  }
  else{
      printf("Opcao invalida!!");
  }

}

int numero_iterativo (int n)
{
  int i, conta=0;
  printf ("Versao iterativa: \n");
     for (i = 1; i <= n; i++){
         conta =  conta+ i;
         
     }
         return conta;
}

int func (int n)
{
        if(n ==0){
            return 0;
        }
       return (n + func(n-1));
}
