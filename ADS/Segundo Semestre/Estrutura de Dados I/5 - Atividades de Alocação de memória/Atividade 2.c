
#include <stdio.h>
#include <stdlib.h>
int main()
{
    int *vet =NULL, i, nota, nota_total, qua;
    float media;
    
    printf("Qual é a quantidade de alunos?\n");
    scanf("%d", &qua);
    vet =(int*) malloc(qua*sizeof (int));
    for(i=0; i<qua; i++){
        printf("Nota do %d aluno\n", i+1);
        scanf("%d", &vet[nota]);
        nota_total = nota_total+ vet[nota];
        
    }
    media = (nota_total) /qua;
    printf("A media da turma é %f", media);
}

