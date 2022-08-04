#include <stdio.h>
#include <locale.h>

main(){
setlocale(LC_ALL, "Portuguese");
 float preco=0.0, desconto=0.0, total=0.0, pagar=0.0;
   int quant;
   char desc;
printf("Digite produto: ");
scanf("%s", &desc);
printf("Digite a quantidade:\n");
scanf("%d", &quant);
printf("Qual é o preço do produto?\n");
scanf("%f", &preco);
total = quant*preco;
if (quant <5){
desconto = total *0.02;
} else{
     if ((quant >5) && (quant<=10)){
    desconto = total*0.03;
}else {
   desconto = total*0.05;
}
pagar = total-desconto;
 printf("Total: %f\n", total);
printf("Desconto = %2f\n", desconto);
printf("Total a pagar: %f\n", pagar);
}
}
