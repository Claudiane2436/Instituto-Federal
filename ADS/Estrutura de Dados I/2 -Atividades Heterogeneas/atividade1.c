#include <stdio.h>


struct funcionario {
    int ID;
    char nome[30];
    int idade;
    float salario;
}func[5];

int main()
{
    int i;
    for(i=0; i<5; i++){
   
    printf("ID do funcionario:\n");
    scanf("%d", &func[i].ID);
    printf("Nome do funcionario:\n");
    getchar();
    fgets(func[i].nome, 20, stdin);
    printf("Idade do funcionario:\n");
    scanf("%d", &func[i].idade);
    printf("Salario do funcionario:\n");
    scanf("%f", &func[i].salario);
}

for(i=0; i<5; i++){
    
    printf("\nID do funcionario: %d", func[i].ID);
    printf("\nNome do funcionario: %s", func[i].nome);
    printf("\nIdade do funcionario: %d", func[i].idade);
    printf("\nSalario do funcionario: %f", func[i].salario);
}
    return 0;
}