#include <stdio.h>
#include <stdlib.h>

typedef struct aluno{
    int matricula;
    float n1, n2, n3;

}ALUNO;

typedef struct elemento *Lista;

Lista *cria_lista();

destroi_lista(Lista *li);

tamanho_lista(Lista *li);

lista_cheia(Lista *li);

lista_vazia(Lista *li);

int insere_lista_inicio(Lista *li, ALUNO al);

int insere_lista_final(Lista *li, ALUNO al);

int insere_lista(Lista *li, ALUNO al);

int remove_lista_inicio(Lista *li);

int remove_lista_final(Lista *li);

int remove_lista(Lista *li, int matricula);

int consulta_lista_posicao(Lista *li, int posicao, ALUNO *al);

int consulta_lista_matricula(Lista *li, int matricula, ALUNO *al);
