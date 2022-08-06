#include <stdio.h>
#include <stdlib.h>
#include "listaDCircular.h"

struct elemento{
    ALUNO dados;
    struct elemento *prox;
};

typedef struct elemento Elem;

Lista *cria_lista(){
    Lista *li = (Lista*)malloc(sizeof(Lista*));
    if(li !=NULL){
        *li = NULL;
    }
    return li;
}

destroi_lista(Lista *li){
    if(li!=NULL && (*li)!=NULL){
        Elem *aux, *no = *li;
        while((*li)!= no ->prox){}
        aux = no;
        no = no -> prox;
        free(aux);
    }
    free(no);
    free(li);
}

tamanho_lista(Lista *li){
    if(li == NULL || (*li)==NULL){
        return 0;
    }
    int acum = 0;
    Elem *no = *li;
    do{
        acum++;
        no = no ->prox;
    }while(no !=(*li));
    return acum;
}

lista_cheia(Lista *li){
    return 0;
}

lista_vazia(Lista *li){
    if(li == NULL || (*li) ==NULL){
        return 1;
    }else{
        return 0;
    }
}

int insere_lista_inicio(Lista *li, ALUNO al){
    if(li == NULL){
        return 0;
    }
    Elem *no = (Elem*)malloc(sizeof(Elem));
    if(no==NULL){
        return 0;
    }
    no ->dados = al;
    if((*li)==NULL){
        *li = no;
        no ->prox = no;
    }else{
        Elem *aux = *li;
        while(aux ->prox !=(*li)){
            aux = aux ->prox;
        }
        aux ->prox = no;
        no -> prox = *li;
        *li = no;

    }
    return 1;
}

int insere_lista_final(Lista *li, ALUNO al){
    if(li ==NULL){
        return 0;
    }
    Elem *no = (Elem*)malloc(sizeof(Elem));
    if(no == NULL){
        return 0;
    }
    no ->dados = al;
    if((*li)==NULL){
        *li = no;
        no -> prox = no;
    }else{
        Elem *aux = *li;
        while(aux ->prox!=(*li)){
            aux = aux -> prox;
        }
        aux -> prox = no;
        no -> prox = *li;
    }
    return 1;
}

int insere_lista(Lista *li, ALUNO al){
    if(li ==NULL){
        return 0;
    }
    Elem *no = (Elem*) malloc(sizeof(Elem));
    if(no == NULL){
        return 0;
    }
    no -> dados =al;
    if((*li)==NULL){
        *li = no;
        no ->prox = no;
        return 1;
    }
    else{
        if((*li)->dados.matricula >al.matricula){
            Elem *atual = *li;
            while(atual ->prox !=(*li)){
                atual = atual ->prox;
            }
            no ->prox = *li;
            atual ->prox = no;
            *li = no;
            return 1;
        }
        Elem *ant = *li, *atual = (*li)->prox;
        while(atual !=(*li)&& atual ->dados.matricula <al.matricula){
                ant = atual;
                atual = atual ->prox;
    }
    ant ->prox = no;
    no ->prox = atual;
    }
    return 1;
}

int remove_lista_inicio(Lista *li){
    if(li ==NULL){
        return 0;
    }
    if((*li)==NULL){
        return 0;
    }
    if((*li)==(*li)->prox){
        free(*li);
        *li = NULL;
        return 1;
    }
    Elem *atual = *li;
    while(atual ->prox !=(*li)){
        atual = atual ->prox;
    }
    Elem *no = *li;
    atual ->prox = no ->prox;
    *li = no ->prox;
    free(no);
    return 1;
}

int remove_lista_final(Lista *li){
    if(li ==NULL){
        return 0;
    }
    if((*li)==NULL){
        return 0;
    }
    if((*li)==(*li)->prox){
        free(*li);
        *li = NULL;
        return 1;
    }
    Elem *ant, *no = *li;
    while(no->prox !=(*li)){
        ant = no;
        no = no ->prox;
    }
    ant ->prox = no ->prox;
    free(no);
    return 1;
}

int remove_lista(Lista *li, int matricula){
    if(li==NULL){
        return 0;
    }
    if((*li)==NULL){
        return 0;
    }
    Elem *no = *li;
    if(no->dados.matricula == matricula){
        free(no);
        *li = NULL;
        return 1;
    }else{
        Elem *ult = *li;
        while(ult ->prox !=(*li)){
            ult = ult ->prox;
        }
        ult ->prox = (*li)->prox;
        *li (*li)->prox;
        free(no);
        return 1;
    }
    Elem *ant = no;
    no = no ->prox;
    while(no !=(*li)&& no->dados.matricula =!matricula){
        ant = no;
        no = no ->prox;
    }
    if(no == *li){
        return 0;
    }
    
    ant ->prox = no ->prox;
    free(no);
    return 1;
}

int consulta_lista_posicao(Lista *li, int posicao, ALUNO *al){
    if(li =NULL || (*li)==NULL|| posicao <=0){
        return 0;
    }
    Elem *no = *li;
    int i = 1;
    while(no ->prox !=(*li) && i<posicao){
        no = no ->prox;
        i++;
    }
    if( i!=posicao){
        return 0;
    }
    else{
        *al = no ->dados;
        return 1;
    }
}

int consulta_lista_matricula(Lista *li, int matricula, ALUNO *al){
    if(li ==NULL || (*li)==NULL){
        return 0;
    }
    Elem *no = *li;
    while(no->prox !=(*li)&& no->dados.matricula !=matricula){
        no = no ->prox;
    }
    if(no ->dados.matricula !=matricula){
        return 0;
    }
    else{
        *al = no-> dados;
        return 1;
    }
}