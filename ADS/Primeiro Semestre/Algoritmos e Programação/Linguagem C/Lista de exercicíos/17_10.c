// Foi feita uma pesquisa entre os habitantes de uma regi�o. Foram coletados
//os dados de idade, sexo (M/F) e sal�rio. Fa�a um algoritmo que informe:
//a) a m�dia de sal�rio do grupo;
//b) a maior e a menor idade do grupo;
//c) a quantidade de mulheres com sal�rio at� R$100,00.
//Encerre a entrada de dados quando for digitada uma idade negativa.

#include <stdio.h>
#include <locale.h>

main(){
setlocale(LC_ALL, "Portuguese");

int idade, quant1=0, quant2=0, partici=0, maior, menor, quantidade_total=0;
char sexo;
float salario, total, media;

printf("Qual � a sua idade?\n");
scanf("%d", &idade);
menor = idade;
maior = idade;
while (idade>0){
if (idade<menor){
     menor = idade;
     }
if (idade>maior){
    maior = idade;
    }
printf("Qual � o seu sexo? (M/F)\n");
scanf("%c", &sexo);
 if(sexo=='F'|| sexo=='f'){
    printf("Qual � o seu sal�rio?\n");
    scanf("%f", &salario);
    if (salario<100){
      partici++;
    }
    printf("Qual � a sua idade?\n");
scanf("%d", &idade);
quant2++;
  }
if(sexo=='M'|| sexo=='m'){
    printf("Qual � o seu sal�rio?\n");
    scanf("%f", &salario);
    printf("Qual � a sua idade?\n");
scanf("%d", &idade);
quant1++;
    }
 quantidade_total = quant1 + quant2;
 total += salario++;
 media = total / quantidade_total;
}
printf("\nA m�dia de sal�rio do grupo � %f.\nA maior idade � %d, e a menor idade � %d. \nA quantidade de mulheres com sal�rio at� R$100,00 � %d.\n", media, maior, menor, partici);
}
