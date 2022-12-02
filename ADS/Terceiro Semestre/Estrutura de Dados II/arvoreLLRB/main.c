#include <stdio.h>
#include <stdlib.h>
#include "arvoreLLRB.h"

int main()
{
    arvoreLLRB *raiz;
    int x;
    raiz = cria_arvLLRB();

    x = insere_arvoreLLRB(raiz, 150);
    x = insere_arvoreLLRB(raiz, 110);
    x = insere_arvoreLLRB(raiz, 100);
    x = insere_arvoreLLRB(raiz, 130);
    x = insere_arvoreLLRB(raiz, 120);
    x = insere_arvoreLLRB(raiz, 140);
    x = insere_arvoreLLRB(raiz, 160);

     if(x){
        printf("Elemento inserido com sucesso!");
    }
    else{
        printf("Erro, nao foi possivel inserir o elemento.");
    }

    x = remove_arvoreLLRB(raiz, 100);

    if(x){
        printf("\nElemento removido com sucesso!");
    }
    else{
        printf("\nErro, nao foi possivel remover o elemento");
    }

}
