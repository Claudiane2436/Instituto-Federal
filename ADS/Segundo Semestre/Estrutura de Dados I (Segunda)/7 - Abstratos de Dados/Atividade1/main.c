#include <stdio.h>
#include <stdlib.h>
#include "minhalib.h"

int main()
{
   int i, n = 2;
    FUNCIONARIO func[n];
    for(i = 0; i < n; i++){
    func[i] = coletaDados();
 }

 imprime(func, n);
 for(i = 0; i < n; i++){
 salario_novo(&func[i].salario);

 }
 rel_salario_corrigido(func, n);
}
