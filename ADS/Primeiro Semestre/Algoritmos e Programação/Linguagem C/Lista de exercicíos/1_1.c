
#include <stdio.h>
#include <locale.h>

main(){
   setlocale(LC_ALL, "Portuguese");
   float dinheiro;
   printf("Quanto de dinheiro h�?\n");
   scanf("%f", &dinheiro);
   if (dinheiro>=10){
     printf("V� ao cinema!");
   }
   else {
   printf("Fique em casa!");
   }

}
