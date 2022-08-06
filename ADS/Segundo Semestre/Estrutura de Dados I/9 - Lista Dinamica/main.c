#include <stdio.h>
#include <stdlib.h>
#include "listaLigada.h"

int main()
{

   Lista *li;
   li = criaLista();
   struct aluno al, al2, al3, dados_aluno;
    int x, mat =110, posicao =1;
    al.matricula = 100;
    al.n1 = 5.3;
    al.n2 = 6.9;
    al.n3 = 7.4;

    al2.matricula = 120;
    al2.n1 = 4;
    al2.n2 = 2.9;
    al2.n3 = 8.4;

    al3.matricula = 110;
    al3.n1 = 1.3;
    al3.n2 = 2.9;
    al3.n3 = 3.4;
 
   x = tamLista(li);
   printf("O tamanho da lista e: %d", x);
   if(listaCheia(li)){
       printf("\nLista esta cheia!");
   }else{
   
       printf("\nLista esta vazia!");
   }
   if(listaVazia(li)){
       printf("\nLista esta vazia");
   }
   else{
       printf("\nLista nao esta vazia");
   }
   x = insere_inicio_lista(li, al);
   if(x){
    printf("\nInserido no inicio com sucesso!");
   }else{
    printf("\nNao foi possivel inserir no inicio.");
   }
   x = insere_final_lista(li, al2);
   if(x){
    printf("\nInserido no inicio com sucesso!");
   }else{
    printf("\nNao foi possivel inserir no inicio.");
   }
   
   x = insere_lista_ordenada(li, al3);
   
   x = remove_inicio_lista(li);
   if(x){
       printf("\nRemovido do inicio com sucesso");
   }else{
       printf("\nNao foi possivel remover do inicio");
   }
   x = remove_final_lista(li);
   if(x){
    
       printf("\nRemovido do final com sucesso!");
   }
   else{
   
       printf("\nNao foi possivel remover do inicio");
   }
   
   x = remove_lista(li, matricula);
   if(x){
       printf("\nRemovido elemento com sucesso!");
   }
   else{
       printf("\nNao foi possivel remover o elemento!");
   }
   
   x = consulta_lista_pos(li, posicao, &al);
   printf("\nConteudo na posicao %d", posicao, &al);
   printf("\n%d", al.matricula);
   printf("\n%d", al.n1);
   printf("\n%d", al.n2);
   printf("\n%d", al.n3);
   
   x = consulta_lista_mat(li, matricula, &al);
   printf("\nMatricula encontrada na posicao %d:", posicao);
   printf("\n%d", al.matricula);
   printf("\n%d", al.n1);
   printf("\n%d", al.n2);
   printf("\n%d", al.n3);
   apagaLista(li);
}

