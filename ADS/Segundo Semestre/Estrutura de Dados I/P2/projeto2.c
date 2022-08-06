#include <stdio.h>
#include <stdlib.h>
#include "projeto2.h"

struct elemento {
    CLIENTE dados;
    struct elemento *prox;
};

typedef struct elemento ELEM;

Lista *criaLista(){
    Lista *li;
    li = (Lista*) malloc(sizeof(Lista));
    if(li != NULL){
        *li = NULL;

    }
    return li;
}
int listaVazia(Lista *li){
    if(li ==NULL){
        return 1;
    }
    if(*li ==NULL){
        return 1;
    }
    return 0;
}
CLIENTE coletadados(){
        CLIENTE cli;
        printf("Informe o codigo:");
        scanf("%d", &cli.codigo);
        printf("Informe o nome:");
        getchar();
        fgets(cli.nome, 50, stdin);
        printf("Informe a empresa:");
        fgets(cli.empresa, 50, stdin);
        printf("Informe o departamento:");
        fgets(cli.departamento, 50, stdin);
        printf("Informe o email:");
        fgets(cli.email, 50, stdin);
        printf("Informe o telefone:");
        scanf("%d", &cli.telefone);
        printf("Informe o celular:");
        scanf("%d", &cli.celular);
        return cli;
}

int insere_lista(Lista *li, CLIENTE cli){
    if(li==NULL){
        return 0;
    }
    ELEM *no =(ELEM*)malloc(sizeof(ELEM));
    if(no==NULL){
        return 0;
    }
    no->dados = cli;
    if(listaVazia(li)){
       no->prox = (*li);
       *li = no;
       return 1;
       }
       else{
        ELEM *ant, *atual = *li;
        while(atual !=NULL && atual->dados.codigo < cli.codigo){
            ant = atual;
            atual = atual->prox;

        }
        if(atual == *li){
            no->prox = (*li);
            *li = no;
        }
        else{
        no->prox = ant->prox;
        ant->prox = no;
        
        }
        return 1;

       }
}
void imprimeDados(Lista *li){
        CLIENTE cli;
        printf("Codigo: %d\n", cli.codigo);
        printf("Nome: %s\n", cli.nome);
        printf("Empresa: %s\n", cli.empresa);
        printf("Departamento: %s\n", cli.departamento);
        printf("Telefone: %d\n", cli.telefone);
        printf("Celular: %d\n", cli.celular);
        printf("Email: %s\n", cli.email);
        return cli;
    
}



int consulta_lista_pos(Lista *li, int posicao, CLIENTE *cli){
    if(li == NULL || posicao <=0){
        return 0;
    }
    ELEM *no = *li;
    int i = 1;
    while(no != NULL && i < posicao){
        no = no ->prox;
        i++;
    }
    if(no ==NULL){
        return 0;
    }else{
        *cli = no->dados;
        return 1;
    }
}

int remove_lista(Lista *li, int mat){
    if(li ==NULL){
        return 0;
    }
    ELEM *ant, *no = *li;
    while(no != NULL && no->dados.codigo !=mat){
        ant = no;
        no = no->prox;
    }
    if(no == NULL){
        return 0;
    }
    if(no == *li){
        *li = no ->prox;
    }
    else{
        ant->prox = no->prox;
    }
    free(no);
    return 1;
}
