//Nome: Claudiane Maria da Silva  GU 30216111
//Nome: Leandro de Paula Barbosa  GU
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include "projeto2.h"


int main(){
    Lista *li, c;
    //Cria lista da empresa fict�cia ACME S.A
    li = criaLista();
    struct cliente cli, cli2, dados_cliente;
    int x, codigo, n, cod, lidos;
    char procurar, op;

    FILE *f;
    f = fopen("arquivo.bin", "rb");
    if(f==NULL){
        printf("Nao ha nada no arquivo");
    }
    else{
        printf("\nArquivo de dados encontrado, efetuando leitura...");
        while(!feof(f)){
        n = fread(&c, sizeof(Lista), 1, f);
        
    }
    fclose(f);
    printf("\nForam lidos %d registros no arquivo de dados\n", lidos);
        
    }

    while(1){
    printf("\n\n\n--------- Menu -----------\n\n");
    printf("1) Inserir um novo contato\n");
    printf("2) Lista de contato\n");
    printf("3) Busca de contato pelo identificador\n");
    printf("4) Busca de contato pelo nome\n");
    printf("5) Edicao pelo identificador\n");
    printf("6) Remocao pelo identificador\n");
    printf("7) Sair\n");
    scanf("%d", &n);
    switch(n){

        case 1:
            cli = coletadados();
            if(insere_lista(li, cli)){
                printf("\nInserido com sucesso!\n");
                system("pause");
                lidos++;//variavel para guardar quando dados foram lidos
                system("cls");

        }

            else{
                printf("\nNao foi possivel inserir!");
                system("pause");
                system("cls");
            }
           break;

    case 2:
        if(listaVazia(li)){
            printf("\nLista esta vazia\n");
            system("pause");
            system("cls");

        }else{
           printf("\nLista nao esta vazia\n");
           imprimeDados(li);
           system("pause");
                system("cls");
        }
        break;

    case 3:

        printf("Qual codigo quer consultar?\n");
        scanf("%d", &x);
        x = consulta_lista(li, codigo, &cli);
        printf("\nCodigo: %d", cli.codigo);
        printf("\nNome: %s",cli.nome);
        printf("\nEmpresa: %s",cli.empresa);
        printf("\nDepartamento: %s",cli.departamento);
        printf("\nEmail: %s",cli.email);
        printf("\nTelefone: %d",cli.telefone);
        printf("\nCelular: %d\n",cli.celular);
        system("pause");
        system("cls");
        break;

    case 4:
        printf("Qual nome deseja procurar?");
        scanf("%s", &procurar);
        x = nome(li, nome, &cli); //função parecida com a consulta, mas nesse pelo nome
        printf("\nCodigo: %d", cli.codigo); 
        printf("\nNome: %s", cli.nome);
        printf("\nEmpresa: %s", cli.empresa);
        printf("\nDepartamento: %s", cli.departamento);
        printf("\nEmail: %s", cli.email);
        printf("\nTelefone: %d", cli.telefone);
        printf("\nCelular: %d\n", cli.celular);
        system("pause");
        system("cls");
        break;

    case 5:
        printf("Qual o codigo que deseja alterar?\n");
        scanf("%d", &x);
        imprimeDados(li);//imprime os dados
        x = remove_lista(li, cli.codigo);//remove a lista
        cod = cli.codigo;//aguardar o número do codigo
        cli = coletadados2();//outra coletadados, esse sem o codigo
        printf("\nAlterado com sucesso!\n");
        system("pause");
        system("cls");
        break;

    case 6:
        printf("Qual o codigo que deseja remover?\n");
        scanf("%d", &x);
        x = consulta_lista(li, codigo, &cli);
        printf("\nCodigo: %d", cli.codigo);
        printf("\nNome: %s",cli.nome);
        printf("\nEmpresa: %s",cli.empresa);
        printf("\nDepartamento: %s",cli.departamento);
        printf("\nEmail: %s",cli.email);
        printf("\nTelefone: %d",cli.telefone);
        printf("\nCelular: %d\n",cli.celular);
        system("pause");
        printf("Tem certeza que deseja remover?\n");
        scanf("%s", &op);
        if(op=='s'||'S'){
        x = remove_lista(li, cli.codigo);{
        if(x){
            printf("\nRemovido elemento com sucesso!\n");
            system("pause");
            system("cls");
        }
        else{
            printf("Nao foi possivel remover o elemento\n");
            system("pause");
            system("cls");
        }
    }
        break;
    case 7:
        printf("Foram salvos %d elementos no arquivo...\n\n\n", salvaDados(li, lidos));
        
        exit(1);
        break;

    default:
        printf("Opcao invalida!"); 
            }
   
    
        }
    }
liberaDados(li);
 return 0;
}