// Faça um programa que leia uma temperatura em graus Celsius e apresente-a
//convertida em graus Fahrenheit. A fórmula de conversão é: F = (9 * C + 160) / 5,
//na qual F é a temperatura em Fahrenheit e C é a temperatura em Celsius;

#include <stdio.h>
#include <locale.h>

main(){
setlocale(LC_ALL, "Portuguese");
float celsius, fa;
printf("Digite a temperatura em graus Celsius:\n");
scanf("%f", &celsius);
fa = (9*celsius+160)/5;
printf("A temperatura em Fahrenheit é %f", fa);
}
