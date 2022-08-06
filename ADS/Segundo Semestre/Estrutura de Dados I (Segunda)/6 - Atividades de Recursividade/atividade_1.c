
#include <stdio.h>
#include <stdlib.h>

int numero_iterativo (int n);
int numero_recursivo(int n);

int
main ()
{
  int i, num, resul, resul2;
  printf ("Digite um numero:\n");
  scanf ("%d", &num);
  resul = numero_iterativo (num);
  resul2 = numero_recursivo (num);

}

int numero_iterativo (int n)
{
  int i;
  printf ("Versao iterativa: \n");
  for (i = 0; i < 6; i++)
    {
      printf ("\n%d \n", n);
      n -= 1;
    }
  return n;
}

int numero_recursivo (int n)
{
  int i, num;
printf ("\nVersao recursivo: \n");
   
         for (i = 0; i < 6; i++)
    {   
        printf ("\n%d \n", n);
        n-=1;
        
    }
    if (i >=6){
        return num;
    }
        
    
    
}
