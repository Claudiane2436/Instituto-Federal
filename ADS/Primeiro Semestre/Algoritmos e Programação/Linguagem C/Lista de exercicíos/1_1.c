
#include <stdio.h>
#include <locale.h>

main(){
   setlocale(LC_ALL, "Portuguese");
   float dinheiro;
   printf("Quanto de dinheiro há?\n");
   scanf("%f", &dinheiro);
   if (dinheiro>=10){
     printf("Vá ao cinema!");
   }
   else {
   printf("Fique em casa!");
   }

}
