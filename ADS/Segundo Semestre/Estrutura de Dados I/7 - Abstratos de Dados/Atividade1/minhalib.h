#include <stdio.h>
#include <stdlib.h>

typedef struct funcionario{
    int id;
    char nome[30];
    int idade;
    float salario;
 }FUNCIONARIO;

 FUNCIONARIO coletaDados();
 void imprime(FUNCIONARIO *func, int n);
 void salario_novo(float *f);
 void rel_salario_corrigido(FUNCIONARIO *func, int n);
