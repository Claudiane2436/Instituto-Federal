#include <stdio.h>
#include <locale.h>

void linha (){
   int i;
   for(i == 1; i<=20; i++)
   putchar('*');

putchar('\n');
}

main (){
int numero;
setlocale(LC_ALL, "Portuguese");
printf ("N�meros de 1 � 5 \n");
linha();
for (numero=0; numero <=5; numero = numero + 1)
      printf ("%d\n", numero);

linha();
}
