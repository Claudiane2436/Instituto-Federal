#include <stdio.h>
#include <locale.h>
#include <string.h>
#include <string.h>


main(){
char civil;
printf("Digite uma letra:");
setlocale(LC_ALL, "Portuguese");
scanf("%c", &civil);

switch(toupper(civil)){  //toupper serve para converter para minúsculo
case 'S': printf("Solteiro(a)"); break;
case 'C': printf("Casado(a)"); break;
case 'D': printf("Divorciado(a)"); break;
case 'V': printf("Viúvo(a)"); break;
default: printf("Letra Iválido");}
}
