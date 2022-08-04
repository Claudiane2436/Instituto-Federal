// Foi feita uma pesquisa entre os habitantes de uma região. Foram coletados
//os dados de idade, sexo (M/F) e salário. Faça um algoritmo que informe:
//a) a média de salário do grupo;
//b) a maior e a menor idade do grupo;
//c) a quantidade de mulheres com salário até R$100,00.
//Encerre a entrada de dados quando for digitada uma idade negativa.

#include <stdio.h>
#include <locale.h>

main(){
setlocale(LC_ALL, "Portuguese");

int idade, quant1=0, quant2=0, partici=0, maior, menor, quantidade_total=0;
char sexo;
float salario, total, media;

printf("Qual é a sua idade?\n");
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
printf("Qual é o seu sexo? (M/F)\n");
scanf("%c", &sexo);
 if(sexo=='F'|| sexo=='f'){
    printf("Qual é o seu salário?\n");
    scanf("%f", &salario);
    if (salario<100){
      partici++;
    }
    printf("Qual é a sua idade?\n");
scanf("%d", &idade);
quant2++;
  }
if(sexo=='M'|| sexo=='m'){
    printf("Qual é o seu salário?\n");
    scanf("%f", &salario);
    printf("Qual é a sua idade?\n");
scanf("%d", &idade);
quant1++;
    }
 quantidade_total = quant1 + quant2;
 total += salario++;
 media = total / quantidade_total;
}
printf("\nA média de salário do grupo é %f.\nA maior idade é %d, e a menor idade é %d. \nA quantidade de mulheres com salário até R$100,00 é %d.\n", media, maior, menor, partici);
}
