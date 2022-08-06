#include <stdio.h>
#include <stdlib.h>
#include "listaSequencia.h"

struct lista{
    int qtd;
    struct aluno dados[MAX];
};

Lista *cria_lista(){
    Lista *li;
    li = (Lista*) malloc(sizeof(struct lista)); //alicar memória do tipo lista
    if(NULL){
        li ->qtd = 0;
    }
    return li;
}
int tamanho_lista(Lista *li){
    if(li=NULL){
        return -1;
    }else{
        return li-> qtd;
    }
}
int lista_cheia(Lista *li){
    if(li==NULL){
        return -1;
    }else{
        return (li -> qtd ==MAX);
    }
}


int insere_lista_ordenada(Lista *li, struct aluno al){
    if(li==NULL){
        return 0;
    }
    if(lista_cheia(li)){
        return 0;
    }
    
    int k, i=0;
    while(i<li -> qtd && li ->dados[i].matricula <al.matricula){//saber onde a nova matricula irá ficar
        i++;
    }
    for(k = li ->qtd -1; k>= i; k--){
        li ->dados[k+1] = li ->dados[k];
    }
    li -> dados[i]=al;
    li -> qtd++;
    return 1;
}
int consulta_lista_mat(Lista *li, int mat, struct aluno *al){
    if(li==NULL){
        return 0;
        
    }
    int k, i =0;
    while(i < li -> qtd&& li->dados[i].matricula !=mat){
        i++;
    }
    if(i==li ->qtd){
        return 0;
    }
    *al = li ->dados[i];
    return 1;
}


int remove_lista(Lista *li, int matricula){
    if(li ==NULL){
        return 0;
    }
    if(li ->qtd ==0){
        return 0;
    }
    int k, i =0;
    while(i < li->qtd &&li->dados[i].matricula!=matricula){
        i++;
    }
    if(i==li ->qtd){
        return 0;
        
    }
    for(k=i; k<li ->qtd-1; k++){
      li -> dados[k]= li->dados[k+1];
        
    }
    li ->qtd--;
    return 1;
}


void libera_lista(Lista *li){
    free(li);
}