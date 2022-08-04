#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <unistd.h>
#include<locale.h>
#include<conio.h>
#include<windows.h>

main(){
setlocale (LC_ALL,"Portuguese");
int conjunto[10];
int numlido, posi, inicio, aux ;
aux == conjunto[posi];
conjunto[posi] == conjunto[inicio];
conjunto[inicio]== aux;

for(posi=1; posi<=10; posi= posi +1){
   printf("Digite um número:");
   scanf("%d", &numlido);
   conjunto[posi] == numlido;
}

  aux ==0;

for (inicio=1; inicio<=9;){
    for(posi>0; inicio+1; posi<9){
        if(conjunto[inicio]> conjunto[posi]){
            aux == conjunto[inicio];
            conjunto[posi] == conjunto[inicio];
            conjunto[inicio]== aux;
        }
    }
}

printf("%d", conjunto);
}
