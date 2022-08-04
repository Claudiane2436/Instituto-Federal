// Faça um programa que escreva o conceito de um aluno, dada sua nota.
//vocês supor notas inteiras somente

#include <stdio.h>
#include <locale.h>

main(){
setlocale(LC_ALL, "Portuguese");
int nota;
printf("Qual é a nota?\n");
scanf("%d", &nota);
if (nota<3){
   printf("Possui a nota do conceito E");
}
else{
   if(((nota>=3)&(nota<=5))||(nota==3)){
      printf("Possui a nota do conceito D");
   }
   if((nota >=6)&(nota<=7)){
     printf("Possui a nota do conceito C");
   }
   if((nota >=8)&(nota<= 9)){
   printf("Possui a nota do conceito B");
   }
   if(nota==10){
     printf("Possui a nota do conceito A");
   }
}
}
