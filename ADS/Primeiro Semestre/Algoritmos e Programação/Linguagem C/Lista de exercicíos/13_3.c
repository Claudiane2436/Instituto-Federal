// Uma empresa quer verificar se um empregado est� qualificado para a
//aposentadoria ou n�o. Para estar em condi��es, um dos seguintes requisitos
// deve ser satisfeito: - Ter no m�nimo 65 anos de idade. - Ter trabalhado no
// m�nimo 30 anos. - Ter no m�nimo 60 anos e ter trabalhado no m�nimo 25 anos.
// Com base nas informa��es acima, fa�a um programa que leia: o n�mero do
//empregado (c�digo), o ano de seu nascimento e o ano de seu ingresso na
//empresa. O programa dever� escrever a idade e o tempo de trabalho do
// empregado e a mensagem 'Requerer aposentadoria' ou 'N�o requerer'.

#include <stdio.h>
#include <locale.h>

main(){
setlocale(LC_ALL, "Portuguese");
int codigo, anonas, anoingre;
int conta_nasci, conta_traba;

printf("Escreva o c�digo do empregado: \n");
scanf("%d", &codigo);
printf("Qual o ano de nascimento do empregado?\n");
scanf("%d", &anonas);
printf("Qual o ano de entrada na empresa?\n");
scanf("%d", &anoingre);
conta_nasci = 2021-anonas;
conta_traba = 2021-anoingre;
if ((conta_nasci >=60)&(conta_traba>=25)){
    printf("\n O empregado possui %d anos e possui %d anos de trabalho\n Requerer aposentadoria\n", conta_nasci, conta_traba);
 }
if (conta_nasci >=65){

    printf("\n O empregado possui %d anos e possui %d de trabalho\n Requerer aposentadoria\n", conta_nasci, conta_traba);
}

if (conta_traba>=30){
    printf("\n O empregado possui %d anos e possui %d de trabalho\n Requerer aposentadoria\n", conta_nasci, conta_traba);
}
else{
    printf("\n O empregado possui %d anos e possui %d de trabalho\n N�o requerer aposentadoria\n", conta_nasci, conta_traba);
}

}
