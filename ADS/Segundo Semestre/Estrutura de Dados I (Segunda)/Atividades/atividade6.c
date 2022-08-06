#include <stdio.h>
#include <locale.h>
#include <string.h>
#include <string.h>

main(){
setlocale(LC_ALL, "Portuguese");
char frase[50];
int x, tam, q=0, palaW =0, palaR=0;

printf("Digite uma frase:\n");
fflush(stdin);
gets(frase);
tam = strlen(frase);
for(x=0; x<tam; x++){
  if(frase[x]!=' '){
    printf("%c", frase[x]);
  }
  else{
    q++;
  }

}
printf("\n\n\nA frase possui possui %d espaços em branco!", q);

getchar();
return 0;
}
