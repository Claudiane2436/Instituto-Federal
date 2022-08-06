
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include "listaSequencia.h"


int main()
{   int x, n, mat =110, posicao =1, num;
    struct aluno al, al2, al3, dados_aluno;
    Lista *li;
    li = cria_lista();
    al.matricula =100;
    al.n1 = 5.3;
    al.n2 = 6.9;
    al.n3 = 7.4;
    
    al2.matricula = 120;
    al2.n1 = 4;
    al2.n2 = 2.9;
    al3.n3 = 8.4;
    
    al3.matricula = 130;
    al3.n1 = 1.3;
    al3.n2 = 2.9;
    al3.n3 = 3.4;
     
    //printf("Qual o tamanho da lista?\n");
    //scanf("%d", &n);
    //printf("O tamanho da lista é %d", n);
    //n = tamanho_lista(li);
    printf("\nO que deseja fazer?\n1 - Inserir uma nova matricula\n2 - Consultar a matricula  \n3 - Remover um aluno\n4 - Sair\n");
    scanf("%d",&num);
    
    if(num==1){
        printf("\nDigite um novo número de matricula:\n");
    scanf("%d", &x);
    x = insere_lista_ordenada(li, al3);
    if(x){
        printf("\nAluno inserido com sucesso!\n");
    }
    else{
        printf("\nErro aluno não inserido");
    }
    return main();
    }
    
    if(num==2){
        printf("\nO número da matricula que deseja consultar:\n");
        scanf("%d", &x);
        x =  consulta_lista_mat(li, mat, &dados_aluno);
    if(x){
        printf("\nConsulta por matricula com sucesso!");
        printf("\nMatricula: %d", dados_aluno.matricula);
        printf("\nNota 1: %f", dados_aluno.n1);
        printf("\nNota 2: %f", dados_aluno.n2);
        printf("\nNota 3: %f", dados_aluno.n3);
    }
    else{
        printf("\nNão foi possível consultar!");
    }
    return main();
    }
    
   
   
    //x = lista_cheia(li);
    
    
    //dados dentro da lista aluno 
    
    if(num==3){
        printf("Qual matricular quer remover?\n");
        scanf("%d", &x);
        x =  remove_lista(li, mat);
        if(x){
            printf("\nAluno removido com sucesso");
        }else{
            printf("\nErro aluno não removido");
        }
    }
    
    if(num==4){
    libera_lista(li);
        
    }
}
