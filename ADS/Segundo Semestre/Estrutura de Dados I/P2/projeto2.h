#include <stdio.h>
#include <stdlib.h>

typedef struct cliente{

    int codigo;
    char nome[50];
    char empresa[50];
    char departamento[50];
    char email[50];
    int telefone;
    int celular;
    
}CLIENTE;

typedef struct elemento *Lista;

//Criando a lista
Lista *criaLista();

int listaVazia(Lista *li);

CLIENTE coletadados();

int insere_lista(Lista *li, CLIENTE cli);

void imprimeDados(Lista *li);

int consulta_lista_pos(Lista *li, int posicao, CLIENTE *cli);

int remove_lista(Lista *li, int mat);


