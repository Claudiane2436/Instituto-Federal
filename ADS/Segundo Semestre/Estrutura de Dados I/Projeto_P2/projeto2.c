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
CLIENTE coletadados2(){
        CLIENTE cli;
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
int tamLista(Lista *li){
    if(li == NULL){
    return 0;
    }
    int acum = 0;
    ELEM *no = *li;
    while(no != NULL){
        acum++;
        no = no->prox;
    }
    return acum;
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
        ELEM *no = *li;
        while(no != NULL){
        printf("Codigo %d\n", no->dados.codigo);
        printf("Nome: %s\n", no->dados.nome);
        printf("Empresa: %s\n", no->dados.empresa);
        printf("Departamento: %s\n", no ->dados.departamento);
        printf("Email: %s\n", no ->dados.email);
        printf("Telefone: %d\n", no->dados.telefone);
        printf("Celular: %d\n", no->dados.celular);
        no = no->prox;
        }

}



int consulta_lista(Lista *li, int codigo, CLIENTE *cli){
    if(li == NULL){
        return 0;
    }
    ELEM *no = *li;
    while(no != NULL && no->dados.codigo != codigo){
        no = no ->prox;
    }
    if(no ==NULL){
        return 0;
    }else{
        *cli = no->dados;
        return 1;
    }
}

int remove_lista(Lista *li, int mat){
    if(li == NULL){
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
        *li = no->prox;
    }
    else{
        ant->prox = no->prox;
    }
    free(no);
    return 1;
}
int nome(Lista *li, int matricula, CLIENTE *cli){
    if(li==NULL){
        return 0;
    }
    ELEM *no = *li;
    while(no != NULL && no->dados.nome != nome){
        no = no ->prox;
    }
    if(no ==NULL){
        return 0;
    }
    else{
        *cli = no ->dados;
        return 1;
    }
}

void liberaDados(CLIENTE *li){
    printf("\nLiberando memoria....");
    free(li);
}

int salvaDados(Lista *li, int n){
    int salvos;
    FILE *f = fopen("arquivo.bin", "wb");
    salvos = fwrite(li, sizeof(CLIENTE), n, f);
    fclose(f);
    return salvos;
}