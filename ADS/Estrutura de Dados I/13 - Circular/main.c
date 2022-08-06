#include <stdio.h>
#include <stdlib.h>

int main()
{
    int x;
    Lista *li;
    li = cria_lista();
    destroi_lista(li);
    x = tamanho_lista(li);
    printf("\nO tamanho da lista e: %d", x);

    x = lista_cheia(li);
    if(x){
        printf("\nA lista esta cheia!!");
    }else{
        printf("\nA lista nao esta cheia.");
    }

    x = lista_vazia(li);
    if(x){
        printf("\nA lista esta vazia");
    }else{
        printf("\nA lista nao esta vazia!!");
    }

    x = insere_lista_inicio(li, al1);
    if(x){
        printf("\nAluno inserio no inicio com sucesso.");
    }
    else{
        printf("\nErro! Aluno nao inserido!");
    }

    x = insere_lista_final(li, al3);
    if(x){
        printf("\nAluno inserio com sucesso");

    }
    else{
        printf("\nErro! Aluno nao inserido!");
    }

    x = insere_lista(li, al2);
    if(x){
        printf("\nAluno inserido ordenadamente com sucesso");
    }
    else{
        printf("\nErro! Aluno nao inserido!");
    }

    x = remove_lista_inicio(li);
    if(x){
        printf("\nAluno removido do inicio com sucesso");
    }
    else{
        printf("\nErro! Aluno nao removido!");
    }
    
    x = int remove_lista_final(li, matricula)
    if(x){
        printf("\nAluno removido no final com sucesso");
    }
    else{
        printf("\nErro! Aluno nao removido!");
    }
    
    x = int remove_lista(li, matricula)
    if(x){
        printf("\nAluno removido na posicao com sucesso");
    }
    else{
        printf("\nErro! Aluno nao removido!");
    }
    
    x = consulta_lista_posicao(li, posicao, &al);
    if(x){
        printf("\nConsultad realizada com sucesso:");
        printf("\nMatricula: %d", al.matricula);
        printf("\nNota 1: %f", al.n1);
        printf("\nNota 1: %f", al.n2);
        printf("\nNota 1: %f", al.n3);
    }
    else{
        printf("\nErro, consulta nao realizada");
    }
    
    x = consulta_lista_matricula(li, matricula, &al);
    if(x){
        printf("\nConsultad realizada com sucesso:");
        printf("\nMatricula: %d", al.matricula);
        printf("\nNota 1: %f", al.n1);
        printf("\nNota 1: %f", al.n2);
        printf("\nNota 1: %f", al.n3);
    }
    else{
        printf("\nErro, consulta nao realizada");
    }
}
