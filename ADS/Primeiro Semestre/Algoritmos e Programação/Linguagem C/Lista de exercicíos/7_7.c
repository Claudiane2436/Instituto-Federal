// Para uma turma de 15 alunos, construa um algoritmo que determine:
//a) A idade m�dia dos alunos com menos de 1,70m de altura;
//b) A altura m�dia dos alunos com mais de 20 anos.

#include <stdio.h>
#include <locale.h>

main(){
setlocale(LC_ALL, "Portuguese");
int aluno=0, idade=0, mediaidade=0, soma1=0, soma2=0;
float altura=0, media_altura=0, soma_altura=0, soma_idade=0;

for (aluno=1; aluno<=4; aluno++){

  printf("Qual � a idade do aluno?\n");
  scanf("%d", &idade);
  printf("Qual � a altura do aluno?\n");
  scanf("%f", &altura);
  if (altura<1.70){
    soma1++;
    mediaidade += idade ++;
    soma_idade  =  mediaidade / soma1;
  }
  if (idade>20){
    soma2++;
    media_altura += altura ++;
    soma_altura = media_altura / soma2;
  }

}
printf("\nA idade m�dia dos alunos com menos de 1,70 de altura � %f.\nA altura m�dia dos alunos com mais de 20 anos � %f\n", soma_idade, soma_altura);

}
