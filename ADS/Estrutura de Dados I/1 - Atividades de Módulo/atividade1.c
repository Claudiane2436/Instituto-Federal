#include <stdio.h>
#include <locale.h>
void calculoVantagens(float numH, float salarioH, int numFi, float valorF, float salaF);

float salarioB, salarioFi, vt, inss, irps, dedu;

void calculoDeducoes(float taxaIR, float iprf);

 main(){
setlocale(LC_ALL, "Portuguese");
float a=10, b=5.5, d=20, e =400, taxa=6.3, ip=8.5; 
int c = 4;
calculoVantagens(a, b, c, d, e);
printf("O salário bruto é %f", salarioB);
printf("\nO salário família é %f", salarioFi);
printf("\nA vantagem é %f\n", vt);
calculoDeducoes(taxa, ip);
printf("\nINSS é igual: %f", inss);
printf("\nIRPF: %f", irps);
printf("\nDeduções: %f", dedu);
}
void calculoVantagens(float numH, float salarioH, int numFi, float valorF, float salaF){
  salarioB = numH*salarioH;
  salarioFi = numFi*valorF;
  vt = salarioB +salaF;
}

void calculoDeducoes(float taxaIR, float iprf){
    inss = salarioB * 0.08;
    irps = salarioB + taxaIR;
    dedu = inss + iprf;
}