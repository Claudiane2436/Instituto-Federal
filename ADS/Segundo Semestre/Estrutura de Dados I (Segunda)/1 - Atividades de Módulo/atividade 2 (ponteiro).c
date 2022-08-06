#include <stdio.h>
#include <locale.h>
void calculoVantagens(float numH, float salarioH, int numFi, float valorF, float*salarioB, float*salarioFa, float*vt);
void calculoDeducoes(float*inss, float*salarioB, float*irpf, float taxaIR, float*dedu);

int main()
{   setlocale(LC_ALL, "Portuguese");
    float numH,  salarioH,   valorF, salarioB, salarioFa, vt, inss, irpf, taxaIR, dedu;
    int numFi;
    printf("Digite número hora:\n");
    scanf("%f", &numH);
    printf("Digite salário hora:\n");
    scanf("%f", &salarioH);
    printf("Digite número de filhos:\n");
    scanf("%d", &numFi);
    printf("Digite valor por filho:\n");
    scanf("%f", &valorF);
    calculoVantagens(numH, salarioH, numFi, valorF, &salarioB, &salarioFa, &vt);
    printf("\nO salário bruto é %f", salarioB);
    printf("\nO salário família é %f", salarioFa);
    printf("\nA vantagem é %f\n", vt);
    printf("\nDigite a taxaIR:\n");
    scanf("%f", &taxaIR);
    calculoDeducoes(&inss, &salarioB, &irpf, taxaIR, &dedu);
    printf("\nINSS é igual: %f", inss);
    printf("\nIRPF: %f", irpf);
    printf("\nDeduções: %f", dedu);
    
}
void calculoVantagens(float numH, float salarioH, int numFi, float valorF, float*salarioB, float*salarioFa, float*vt){
    *salarioB = numH*salarioH;
    *salarioFa = numFi*valorF;
    *vt = *salarioB+*salarioFa;
}
void calculoDeducoes(float*inss, float*salarioB, float*irpf, float taxaIR, float*dedu){
    *inss = *salarioB*0.08;
    *irpf = *salarioB*taxaIR;
    *dedu = *inss+*irpf;
}


