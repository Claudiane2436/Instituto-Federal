
 #include <stdio.h>
 #include <string.h>
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

 void main(){
    int i, n = 2;
    FUNCIONARIO func[n];
    for(i = 0; i < n; i++){
    func[i] = coletaDados();
 }

 imprime(func, n);
 for(i = 0; i < n; i++){
 salario_novo(&func[i].salario);

 }
 rel_salario_corrigido(func, n);

 }

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
