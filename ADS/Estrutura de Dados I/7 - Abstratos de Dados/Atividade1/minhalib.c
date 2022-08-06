#include <stdio.h>
#include <stdlib.h>
#include "minhalib.h"

 FUNCIONARIO coletaDados(){
 FUNCIONARIO func;
 printf("ID do funcionario:\n");
    scanf("%d", &func.id);
    printf("Nome do funcionario:\n");
    getchar();
    fgets(func.nome, 20, stdin);
    printf("Idade do funcionario:\n");
    scanf("%d", &func.idade);
    printf("Salario do funcionario:\n");
    scanf("%f", &func.salario);
    return func;
 }

  void imprime(FUNCIONARIO *func, int n){
 int i;
    for(i = 0; i < n; i++){
    printf("ID: %d\n", func[i].id);
    printf("Nome: %s\n", func[i].nome);
    printf("Idade: %d\n", func[i].idade);
    printf("Salario: %f\n", func[i].salario);
    }
 }

 void salario_novo(float *f){
        *f = *f * 1.1;
 }

 void rel_salario_corrigido(FUNCIONARIO *func, int n){
 int i;

 for(i = 0; i < n; i++){
    printf("Nome: %s\n", func[i].nome);
    printf("Salario: %f\n", func[i].salario);

    }

}
