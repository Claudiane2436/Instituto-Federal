#include <stdio.h>
#define MAX 100
struct aluno{
    int matricula;
    float n1, n2, n3;
};

typedef struct lista Lista;
Lista *cria_lista();
int tamanho_lista(Lista *li);

int lista_cheia(Lista *li);

int insere_lista_ordenada(Lista *li, struct aluno al);
int remove_lista(Lista *li, int matricula);
int consulta_lista_mat(Lista *li, int mat, struct aluno *al);
void libera_lista(Lista *li);