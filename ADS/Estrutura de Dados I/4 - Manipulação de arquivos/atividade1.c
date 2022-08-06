
#include <stdio.h>
#include <stdlib.h>
#include <ctype.h>
#include <string.h>
#include <locale.h>

int main()
{   
    setlocale(LC_ALL, "");
    FILE *f, *f1, *f2;
    f = fopen("arq1.txt", "w");
    f2 = fopen("arq2.txt", "w");
    if(f==NULL ||f2 ==NULL){
        printf("Erro de abertura\n");
        system("pause");
        exit(1);
    }
    
    char texto[100];
    int i;
    printf("Digite um texto:\n");
    gets(texto);
    for(i =0; i < strlen(texto); i++){
        fputc(texto[i], f);
    }
    fclose(f);
    
    f1 = fopen("arq1.txt", "r");
    char c = fgetc(f1);
    while(c!=EOF){
        fputc(toupper(c), f2);
        c = fgetc(f1);
    }
    
    f2 = fopen("arq2.txt", "r");
    char b = fgetc(f2);
    while(b !=EOF){
        printf("%c", b);
        b = fgetc(f2);
    }
    fclose(f2);
    fclose(f1);
}
