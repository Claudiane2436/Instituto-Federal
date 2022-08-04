#include <stdio.h>
#include <locale.h>
void linha3x(){
   int i;
   for(i=1;i<=3; i++){
  	printf("*");
   }
   putchar('\n');
}
void linha5x(){
   int i;
   for(i=1;i<=5; i++){
  	printf("*");
   }
   putchar('\n');
}
void linha7x(){
   int i;
   for(i=1;i<=7; i++){
  	printf("*");
   }
   putchar('\n');
}

main (){
    linha3x();
    linha5x();
    linha7x();
    linha5x();
    linha3x();
}
