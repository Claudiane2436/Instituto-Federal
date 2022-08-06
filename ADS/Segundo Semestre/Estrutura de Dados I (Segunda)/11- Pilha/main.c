#include <stdio.h>
#include <stdlib.h>
#include "pilhaD.h"
int main()
{   
    int x;
    struct aluno al, al2, al3;

    Pilha *pi;
    pi = cria_pilha();
    destroi_pilha(pi);
    x = tamanho_pilha(pi);
    printf("\nO tamanho da pilha e: %d", x);
    x = pilha_cheia(pi);
    if(x){
        printf("\nA pilha esta cheia!");
    }else{
        printf("\nA pilha nao esta cheia");
    }
    
    x = pilha_vazia(pi);
    if(x){
        printf("\nA pilha esta vazia!");
    }else{
        printf("\nA pilha nao esta vazia.");
    }
    x = insere_pilha(pi, al);
    if(x){
        printf("\nElemento inserido com sucesso!");
    }
    else{
        printf("\nErro, elemento nao inserido com sucesso.");
    }
    
    x = remove_pilha(pi);
    if(x){
        printf("\nElemento removido com sucesso!");
    }
    else{
        printf("\nErro, elemento nao removido.");
    }
    
    x = consulta_pilha(pi, &al);
    if(x){
    
        printf("\nConsulta realiza com sucesso");
        printf("\nMatricula: %d", al.matricula);
        printf("\nNota 1: %d", al.n1);
        printf("\nNota 2: %d", al.n2);
        printf("\nNota 3: %d", al.n3);
    }else{
        printf("\nErro, consulta nao realizada");
    }
    

}
