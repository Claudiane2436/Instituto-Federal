
#include <stdio.h>
#include <stdlib.h>
int main()
{
    int *p, i;
    p =(int*) malloc(10*sizeof (int));
    for(i=0; i<10; i++){
        p[i]=i*2-1;
        if(p[i]>0){
        printf("Os números impares: %d\n", p[i]);
    }
    }
}
