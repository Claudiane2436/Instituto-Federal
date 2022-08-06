//Nome: Claudiane Maria, Prontuário: GU3021611, Turma: ED1D2 - 291567
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

typedef struct conta{
    int id;
    char tipo[20];
    char nome[30];
    float saldo;
}CONTA;

CONTA *aloca(int n);
CONTA coletaDados();
void imprime(CONTA *con, int n);
void vetor_libera(CONTA *n);

int main(){
     int i, n;

    //quarto parágrafo 
    FILE *f = fopen("dados.bin", "wb");
    if(f == NULL)
    {
        printf("Erro na abertura do arquivo");
    exit(1);
         }

    printf("Digite a quantidade de pessoas:");
     scanf("%d", &n);
     CONTA *cont;
     cont = aloca(n);
    for(i=0; i<n; i++){
      cont[i] = coletaDados();
      system("cls");
    }
imprime(cont, n);
vetor_libera(cont);

fwrite(cont, sizeof(CONTA), n,f);
fclose(f);
}

//primeiro parágrafo
CONTA *aloca(int n){
    CONTA *cont = (CONTA*) malloc(n* sizeof(CONTA));
    return cont;
}

//segundo parágrafo
CONTA coletaDados(){
    CONTA con;
    printf("Informe o ID da conta: \n");
    scanf("%d", &con.id);
    printf("Informe o tipo da conta:\n");
    getchar();
    fgets(con.tipo, 29, stdin);
    printf("Informe o nome do cliente: \n");
    fgets(con.nome, 29, stdin);
    printf("Informe o saldo:\n");
    scanf("%f", &con.saldo);
    return con;
    system("pause");
    system("cls");
}


//terceiro parágrafo
void imprime(CONTA *cont, int n){
    int i;
    for(i =0; i<n; i++)
   {
        printf("ID da conta: %d\n", cont[i].id);
        printf("Tipo da conta: %s", cont[i].tipo);
        printf("Nome do cliente: %s", cont[i].nome);
        printf("Saldo da conta: %f\n\n", cont[i].saldo);
    }

    system("pause");

}
//quinto parágrafo
void vetor_libera(CONTA *n){
    free(n);
}

