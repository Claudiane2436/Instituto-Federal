#include <stdio.h>
#include <locale.h>
#include <string.h>

main(){
int idade;
printf("Digite a sua idade:");
setlocale(LC_ALL, "Portuguese");
scanf("%d", &idade);

if (idade<16){
printf(" Não precisa votar");}
else
if((idade>=18)&& (idade<=65)){
printf("Eleitor Obrigatorio");}
else { printf("Eleitor facultativo");}
}

