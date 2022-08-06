#include <stdio.h>
#include <locale.h>
#include <string.h>
#include <string.h>

main(){
setlocale(LC_ALL, "Portuguese");

char string1[20];
char string2[20];
char palavra1[20];
char letra;
int x, cont1 =0, cont2 = 0, retorno;
printf("\nDigite a primeira palavra:\n");
gets(string1);
printf("\nDigite a segunda palavra:\n");
gets(string2);
printf("\nQual parte da palavra deseja procurar?\n");
gets(palavra1);
printf("\nQual letra deseja procurar na palavras?\n");
scanf("%c", &letra);


for (x =0; x<strlen(string1); x++){
   if(string1[x]==letra){
      cont1++;
   }
}

for (x=0;x<strlen(string2); x++){
  if(string2[x]==letra){
     cont2++;
  }
}






printf("A letra \"%c\" aparece %d vez(es) na string 1", letra, cont1);
printf(" e %d vez(es) na string 2", cont2);
printf("\n\n\n");
}
