#include <stdio.h>
#include <stdlib.h>
#include "projeto2.h"


int main()
{
    Lista *li;
    //Cria lista da empresa fict�cia ACME S.A
    li = criaLista();
    struct cliente cli, cli2, dados_cliente;
    int x, codigo, n;

    cli2.codigo = 123;
    cli2.nome[50] = "Poliana";
    char empresa[50] = "FSAG";
    cli2.departamento[50] = "RH";
    cli2.email[50] = "poliana@123.com";
    cli2.telefone = 24365025;
    cli2.celular = 9875466;
    
    printf("\n");

    printf("--------- Menu -----------\n\n");
    printf("1) Inserir um novo contato\n");
    printf("2) Lista de contato\n");
    printf("3) Busca de contato pelo identificador\n");
    printf("4) Busca de contato pelo nome\n");
    printf("5) Edicao pelo identificador\n");
    printf("6) Remocao pelo identificador\n");
    printf("7) Sair\n");
    scanf("%d", &n);
    if(n==1){
        CLIENTE cli = coletadados();
        insere_lista(li, cli);
        if(x){
            printf("\nInserido com sucesso!\n");
            system("pause");
            system("cls");
            return main();
        }
        else{
            printf("\nNao foi possivel inserir!");
            system("pause");
            system("cls");
        }
    }

    if(n==2){
            if(listaVazia(li)){
               
       printf("\nLista esta vazia");
       printf("%s\n", empresa);
       system("pause");
            system("cls");
   }
   else{
       printf("\nLista nao esta vazia");
       imprimeDados(li);
        system("pause");
            system("cls");
    }

    }



    if(n==3){
        int posicao;
        printf("Qual codigo voce quer consultar?\n");
        scanf("%d", &x);
        x = consulta_lista_pos(li, codigo, &cli);
        printf("\nCodigo: %d", cli.codigo);
        printf("\nNome: %s",cli.nome);
        printf("\nEmpresa: %s",cli.empresa);
        printf("\nDepartamento: %s",cli.departamento);
        printf("\nTelefone: %d",cli.telefone);
        printf("\nCelular: %d",cli.celular);
        printf("\nEmail: %s",cli.email);
        system("pause");
            system("cls");
    }
    if(n==4){

    }
    if(n==5){

    }
    if(n==6){
        printf("Qual o codigo que deseja remover?\n");
        scanf("%d", &x);
        x = remove_lista(li, codigo);
        if(x){
            printf("\nRemovido elemento com sucesso!");
            system("pause");
            system("cls");
        }
        else{
            printf("Nao foi possivel remover o elemento");
            system("pause");
            system("cls");
        }
    }
    return main();
}
