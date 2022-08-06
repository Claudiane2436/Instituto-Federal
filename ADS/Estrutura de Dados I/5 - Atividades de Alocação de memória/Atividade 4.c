#include <stdio.h>
#include <stdlib.h>
#include <string.h>

void funcao_troca_inteiros(int *a, int *b);

int main()
{
   char *p; //criando um ponteiro do tipo char
   p = (char*)malloc(4*sizeof(char)); //alocando 4 posições do tipo char 
   strcpy(p, "IFSP");//Copiando a palavra IFSP para dentro de p
   p = (char*)realloc(p, 15*sizeof(char));//Realocando mais 15 posições do tipo char
   strcat(p, " - Guarulhos");//Concatenar em p Guarulhos
   printf("%s", p); //Imprimir a frase que se formou
   free(p);//libera a memoria alocada no p
}

void funcao_troca_inteiros(int *a, int *b){
    int *aux;
    aux = (int*) malloc(sizeof(int));//alocando para o aux uma quantidade int
    if(aux = NULL){//Testa para saber que tem Memoria suficiente
        printf("Memoria insuficiente\n");
        exit(1);
    }
    else{//Se tem memoria suficiente irá dizer que o ponteiro aux é igual ao ponteiro a
        *aux = *a;
        *a = *b;
        *b = *aux;
        free(aux);//libera a memoria alocada no aux
    }
}
