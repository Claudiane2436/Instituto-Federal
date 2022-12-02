#include <stdio.h>
#include <stdlib.h>
#include "arvoreAVL.h"

int main()
{
    int x;
    arvAVL *raiz;

    raiz = cria_arvAVL();

    x = insere_arvAVL(raiz, 100);
    x = insere_arvAVL(raiz, 140);
    x = insere_arvAVL(raiz, 160);
    x = insere_arvAVL(raiz, 120);
    x = insere_arvAVL(raiz, 130);
    x = insere_arvAVL(raiz, 150);
    x = insere_arvAVL(raiz, 110);


    //liberar_arvBin(raiz);
    if(vazia_arvAVL(raiz)){
        printf("A arvore esta vazia.");
    }
    else{
        printf("A arvore possui elementos");
    }
    printf("\n");

    if(x){
        printf("Elemento inserido com sucesso!");
    }
    else{
        printf("Erro, nao foi possivel inserir o elemento.");
    }

    x = altura_arvAVL(raiz);
    printf("\nAltura da arvore: %d\n", x);

    x = totalNO_arvAVL(raiz);
    printf("Total de nos na arvore: %d\n", x);

    printf("Visitando em pre-Ordem:\n");
    preOrdem_arvAVL(raiz);
    printf("\nVisitando em em-Ordem:\n");
    emOrdem_arvAVL(raiz);
    printf("\nVisitando em pos-Ordem:\n");
    posOrdem_arvAVL(raiz);



    printf("\nBusca na Arvore Binario:\n");
    if(consulta_arvAVL(raiz, 110)){
        printf("Consulta realizada com sucesso!");
    }
    else{
        printf("Elemento nao encontrado...");
    }

    x = remove_arvAVL(raiz, 160);
    if(x){
        printf("\nElemento removido com sucesso!");
    }
    else{
        printf("\nErro, nao foi possivel remover o elemento");
    }
}
