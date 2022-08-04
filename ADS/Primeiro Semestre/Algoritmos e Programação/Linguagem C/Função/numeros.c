#include <stdio.h>
#include <locale.h>

main(){
int numero;
setlocale(LC_ALL, "Portuguese");
printf ("********************\n");
printf ("Números de 1 à 5 \n");
printf ("********************\n");
for (numero=0; numero <=5; numero = numero + 1)
      printf ("%d\n", numero);
      printf ("********************\n");

}
