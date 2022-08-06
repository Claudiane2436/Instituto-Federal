#include <stdio.h>
#include <stdlib.h>
#include "listaDDupla.h"

int main()
{
   int x;
   struct aluno al, al1, al2, al3;
   Lista *li;
   li = cria_lista();
   x = tamanho_lista(li);
   printf("\nO tamanho da lista e: %d", x);
   x = lista_cheia(li);
   if(x){
    printf("\nA lista esta cheia!");
   }
   else{
    printf("\nA lista nao esta cheia");
   }
   x = lista_vazia(li);
   if(x){
    printf("\nA lista esta vazia!");
   }
   else{
    printf("\nA lista nao esta vazia");
   }
   x = insere_lista_inicio(li, al1);
   if(x){
    printf("\nAluno inserido no inicio com sucesso!");
   }
   else{
    printf("\nErro! Aluno nao inserido.");
   }

   //x = insere_lista_final(li, al3);
   //if(x){
   // printf("\nAluno inserido no final com sucesso");
   //}
   //else{
    //printf("\nErro! Aluno nao inserido");
   //}
   x = insere_lista(li, al2);
   if(x){
    printf("\nAluno inserido no meio com sucesso!");
   }
   else{
    printf("\nErro!Aluno nao inserido.");
   }
   x = remove_lista_inicio(li);
   if(x){
    printf("\nElemento removido no inicio com sucesso!");
   }
   else{
    printf("\nErro! Elemento nao removido.");
   }

   x = remove_lista_final(li);
   if(x){
    printf("\nElemento removido no final com sucesso!");
   }
   else{
    printf("\nErro! Elemento nao removido.");
   }
   x = remove_lista(li, matricula);
   if(x){
    printf("\nElemento removido com sucesso!");
   }
   else{
    printf("\nErro! Elemento nao removido.");
   }
    x = consulta_lista_pos(li, pos, &al);
    if(x){
        printf("\nConsulta realizada com sucesso:");
        printf("\nMatricula: %d", al.matricula);
        printf("\nNota 1: %f", al.n1);
        printf("\nNota 2: %f", al.n2);
        printf("\nNota 3: %f", al.n3);
    }
    else{
        printf("\nErro, consulta nao realizada");
    }
    x = consulta_lista_mat(li, mat, &al);
    if(x){
        printf("\nConsulta realizada com sucesso:");
        printf("\nMatricula: %d", al.matricula);
        printf("\nNota 1: %f", al.n1);
        printf("\nNota 2: %f", al.n2);
        printf("\nNota 3: %f", al.n3);
    }
    else{
        printf("\nErro, consulta nao realizada");
    }
   destroi_lista(li);
}
