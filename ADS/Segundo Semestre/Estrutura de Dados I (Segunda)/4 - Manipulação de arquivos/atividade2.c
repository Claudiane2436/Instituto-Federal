/******************************************************************************

                            Online C Compiler.
                Code, Compile, Run and Debug C program online.
Write your code in this editor and press "Run" button to compile and execute it.

*******************************************************************************/

#include <stdio.h>
#include <stdlib.h>
struct funcionario{
    int ID;
    char nome[30];
    int idade;
    float salario;
};

int main()
{
    FILE *fp = fopen("arquivo.txt", "wb");
    FILE *fp1 = fopen("arquivo.txt", "rb");
    if (fp==NULL){
        printf("Erro de abertura\n");
        system("pause");
        exit(1);
    }
    
     int i, n=5;
     struct funcionario func[n];
    for(i=0; i<n; i++){
   
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
    
    fwrite(func, sizeof(struct funcionario), 5, fp);
    fclose(fp);
    fseek(fp1, 2*sizeof(struct funcionario), SEEK_SET);
    fread(func, sizeof(struct funcionario), 1, fp1);
    printf("\nID: %d \nNome: %sIdade: %d \nSalario: %f\n", func[1].ID, func[1].nome, func[1].idade, func[1].salario);
    
    system("pause");
    return 0;
}
