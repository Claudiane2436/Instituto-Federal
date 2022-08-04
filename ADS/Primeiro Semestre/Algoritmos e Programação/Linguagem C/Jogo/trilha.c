#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <unistd.h>
#include<locale.h>
#include<conio.h>
#include<windows.h>


void tabuleiro(){
  printf("\n\n\n\n\n\n");
 printf(" \t\t _____ \t\t       ______  ______  ______  ______   ______\n");
      printf("\t\t|__1__|\t\t      |__40__||__39__||__38__||__37__| |__36__|\t\n");
       printf("\t\t|__2__|\t\t\t\t\t\t       |__35__|\t\n");
      printf("\t\t|__3__|\t\t\t\t\t\t       |__34__|\t\n");
      printf("\t\t|__4__|\t\t\t\t\t\t       |__33__|\t\n");
      printf("\t\t|__5__|\t\t\t\t\t\t       |__32__|\t\n");
      printf("\t\t|__6__|\t\t\t\t\t\t       |__31__|\t\n");
      printf("\t\t|__7__|\t\t\t\t\t\t       |__30__|\t\n");
      printf("\t\t|__8__|\t");
      printf("______  ______  ______  ______                 |__29__| \n");
       printf("\t\t|__9__|");
      printf("|__10__|");
      printf("|__11__|");
      printf("|__12__|");
      printf("|__13__|\t\t       |__28__|\t");
      printf("\n\t\t\t\t\t       |__14__|\t\t       |__27__|\t");
      printf("\n\t\t\t\t\t       |__15__|\t\t       |__26__|\t");
      printf("\n\t\t\t\t\t       |__16__|\t\t       |__25__|\t");
      printf("\n\t\t\t\t\t       |__17__|\t\t       |__24__|\t");
      printf("\n\t\t\t\t\t       |__18__|\t");
      printf("______  ______ |__23__| \n");
     printf("\t\t\t\t\t       |__19__|");

      printf("|__20__|");
      printf("|__21__|");
      printf("|__22__|");
}

void desenho(){
printf("\n\t\t\t\t                      /|   ^^^^^^^^^");
printf("\n\t\t\t\t 		     / |   ^^^^^^^^^");
printf("\n\t\t\t\t	    	    /  |   ^^^^^^^^^");
printf("\n\t\t\t\t                   /   |   ^^^^^^^^^");
printf("\n\t\t\t\t	          |    |   ^^^^^^^^^");
printf("\n\t\t\t\t                   |   |   ^^^^^^^^^");
printf("\n\t\t\t\t	            |  |   ^^^^^^^^^");
printf("\n\t\t\t\t      ------------ ooooo");
printf("\n\t\t\t\t     |           /o     o ����");
printf("\n\t\t\t\t      |	        /  ooooo |    |    ^^^^^^^^^");
  printf("\n\t\t\t\t       |       /    | |   |    |    ^^^^^^^^^");
  printf("\n\t\t\t\t        |     /     | |    |    |    ^^^^^^^^^" );
  printf("\n\t\t\t\t	 |   /      | |     |    |   ^^^^^^^^^");
  printf("\n\t\t\t\t          | /	    | |      |    |   ^^^^^^^^^");
  printf("\n\t\t\t\t		    | |       |    |    ^^^^^^^^^");
 printf("\n\t\t\t\t	            | |        |  /");
printf("\n\t\t\t\t		    | |	        |/");
printf("\n\t\t\t\t	            | |");
printf("\n\t\t\t\t		    | |");
printf("\n\t\t\t\t____________________| |_________________________");
}

void validacao(){
printf("\n\n\n\t Op��o inv�lida!");
    sleep(2);
    system("cls");
    return main();
}

int main() {

	setlocale (LC_ALL,"Portuguese");
  int opcao, casa, jogador; //incializa��o
  char nome1[20], nome2[20];
  casa = 0;
  desenho();
  printf("\n\n\n\n\t\t\tBem-vindo(a) � Cidagia\n\t\t\tA cidade que � controlada pelo consumo da energia el�trica!");
  sleep(2);//dar um tempo para aparecer o menu
  printf("\n\n\n\t\t\t\t--------- Escolha a op��o --------\n");
  printf("\t\t\t\t\t1 - Novo Jogo\n");
  printf("\t\t\t\t\t2 - Como Jogar\n");
  printf("\t\t\t\t\t3 - Sair\n");
  scanf("%d", &opcao);
  system("cls");
  if(opcao>3|| opcao<0){
   validacao();
 }
  if (opcao == 1){ //Come�o do novo jogo
    desenho();
    printf("\n\n\n\n\t\t\t\t\t------ Fa�a a sua escolha ------\n\t\n");
    printf("\t\t\t\t\t      1- Jogar sozinho\n");
    printf("\t\t\t\t\t      2- Jogar com outro jogador\n");
    scanf("%d", &jogador);
    system("cls");

    if(jogador<1|| jogador>3){
        validacao();
    }

    if(jogador ==1){//Opc�o 1 do jogador
      printf("Qual � o nome do jogador?\n");
      scanf("%s", nome1);
      system("cls"); // limpar a tela
      tabuleiro();
      int numero =0,casa=0, numero1=0, casa1=0;


      do{
    printf("\n\nAperte enter para sortear o n�mero do dado!!\n");
    getch();
    srand(time(NULL));
    numero = rand()%6+1; //n�mero do dado
    casa = casa + numero;
    printf("\nO n�mero do dado � %d", numero);
    printf("\nO computador est� na casa: %d\n ", casa);


    if(casa==2){
        printf("\n\nSe esqueceu de tirar o celular do carregador, ent�o ter� de voltar 1 casa!");
        casa-=1;
        printf("\nO computador est� na casa: %d\n ", casa);
       }

    if(casa==5){
        printf("\n\nDesligou o Ar condicionado quando saiu de casa, avan�a mais 4 casas");
        casa+=4;
        printf("\nO computador est� na casa: %d\n ", casa);
    }
    if(casa==10){
        printf("\n\nFicou muito tempo no chuveiro, ent�o ter� de voltar 2 casas!");
        casa-=2;
        printf("\nO computador est� na casa: %d\n ", casa);
       }
       if(casa==12){
        printf("\n\nLigou o Micro-ondas, ficou no mesmo lugar");
        printf("\nO computador est� na casa: %d\n ", casa);
    }
    if(casa==13){
        printf("\n\nSe lembrou de apagar a luz quando foi dormir, avan�a mais 3 casas");
        casa+=3;
        printf("\nO computador est� na casa: %d\n ", casa);
    }
    if(casa==15){
        printf("\n\nDemorou pouco no banho, avan�a mais 3 casas");
        casa+=3;
        printf("\nO computador est� na casa: %d\n ", casa);
    }
    if(casa==17){
        printf("\n\nLigou a TV para assistir, ficou no mesmo lugar");
        printf("\nO computador est� na casa: %d\n ", casa);
    }
     if(casa==19){
        printf("\n\nEsqueceu de desligar o chuveiro, perdeu a vez!");
       int passo=0;
    while(passo<1){
      for(passo=0; passo<1; passo++){
       numero1 = rand()%6+1;
       casa1 = casa1 + numero1;
       printf("\nO n�mero do dado � %d", numero1);
       printf("\n%s est� na casa: %d\n ", nome1, casa1);
            }
        }
    }

    if(casa==23){
        printf("\n\nLigou a TV enquanto est� no celular, perdeu a vez!");
       int passo=0;
        while(passo<1){
            for(passo=0; passo<1; passo++){
       srand(time(NULL));
       numero1 = rand()%6+1;
       casa1 = casa1 + numero1;
       printf("\nO n�mero do dado � %d", numero1);
       printf("\n%s est� na casa: %d\n ", nome1, casa1);
            }
        }
    }
    if(casa==24){
        printf("\n\nTirou o carregador do celular quando a bateria estava completa, avan�a mais 2 casas");
        casa+=2;
        printf("\nO computador est� na casa: %d\n ", casa);
    }
     if(casa==28){
        printf("Ligou o computador, ficou no mesmo lugar");
        printf("\nO computador est� na casa: %d\n ", casa);
    }

    if(casa==31){
        printf("\n\nEsqueceu de desligar a luz, perdeu a vez!");
      int passo=0;
        while(passo<1){
            for(passo=0; passo<1; passo++){
       srand(time(NULL));
       numero1 = rand()%6+1;
       casa1 = casa1 + numero1;
       printf("\nO n�mero do dado � %d", numero1);
       printf("\n%s est� na casa: %d\n ", nome1, casa1);
            }
        }
    }

    if(casa==32){
        printf("\n\nDeixou a porta da geladeira aberta, ent�o ter� de voltar 3 casas!");
        casa-=3;
        printf("\nO computador est� na casa: %d\n ", casa);
       }

    if(casa==33){
        printf("\nLigou o Ar condicionado, ficou no mesmo lugar");
        printf("\nO computador est� na casa: %d\n ", casa);
    }
    if(casa==36){
        printf("\n\nEsqueceu de apagar a luz do banheiro, ent�o ter� de voltar 2 casas!");
        casa-=2;
        printf("\nO computador est� na casa: %d\n ", casa);
       }

    if(casa==37){
        printf("\nAbriu a porta da geladeira, ficou no mesmo lugar");
        printf("\nO computador est� na casa: %d\n ", casa);
    }
    //Pausa e precisa apertar outro tecla para continuar
     printf("\n\nAperte enter para sortear o n�mero do dado!!\n");
     getch();
    srand(time(NULL));
    numero1 = rand()%6+1; //n�mero do dado
    casa1 = casa1 + numero1;

    printf("\nO n�mero do dado � %d", numero1);
    printf("\n%s est� na casa: %d\n ", nome1, casa1);

    if(casa1==2){
        printf("\n\nSe esqueceu de tirar o celular do carregador, ent�o ter� de voltar 2 casas!");
        casa1-=1;
        printf("\n%s est� na casa: %d\n ", nome1, casa1);
          }

    if(casa1==5){
        printf("\n\nDesligou o Ar condicionado quando saiu de casa, avan�a mais 4 casas");
        casa1+=4;
       printf("\n%s est� na casa: %d\n ", nome1, casa1);
    }

    if(casa1==10){
        printf("\n\nFicou muito tempo no chuveiro, ent�o ter� de voltar 2 casas!");
        casa1-=2;
        printf("\n%s est� na casa: %d\n ", nome1, casa1);
          }


   if(casa1==12){
        printf("\n\nLigou o Micro-ondas, ficou no mesmo lugar");
        printf("\n%s est� na casa: %d\n ", nome1, casa1);
    }

    if(casa1==13){
        printf("\n\nSe lembrou de apagar a luz quando foi dormir, avan�a mais 3 casas");
        casa1+=3;
       printf("\n%s est� na casa: %d\n ", nome1, casa1);
    }

    if(casa1==15){
        printf("\n\nDemorou pouco no banho, avan�a mais 3 casas");
        casa1+=3;
       printf("\n%s est� na casa: %d\n ", nome1, casa1);
    }


   if(casa1==17){
        printf("\n\nLigou a TV para assistir, ficou no mesmo lugar");
        printf("\n%s est� na casa: %d\n ", nome1, casa1);
    }


    if(casa1==19){
        printf("\n\nEsqueceu de desligar o chuveiro, perdeu a vez!");
       int passo=0;
            while(passo<1){
      for(passo=0; passo<1; passo++){
       srand(time(NULL));
       numero = rand()%6+1;
       casa = casa + numero;
       printf("\nO n�mero do dado � %d", numero);
       printf("\nO computador est� na casa: %d\n ", casa);
            }
        }
    }




    if(casa1==23){
        printf("\n\nLigou a TV enquanto est� no celular, perdeu a vez!");//est� certo
       int passo=0;
            while(passo<1){
      for(passo=0; passo<1; passo++){
       srand(time(NULL));
       numero = rand()%6+1;
       casa = casa + numero;
       printf("\nO n�mero do dado � %d", numero);
       printf("\nO computador est� na casa: %d\n ", casa);
            }
        }
    }

    if(casa1==24){
        printf("\n\nTirou o carregador do celular quando a bateria estava completa, avan�a mais 2 casas");
        casa1+=2;
        printf("\n%s est� na casa: %d\n ", nome1, casa1);
    }


   if(casa1==28){
        printf("\n\nLigou o computador, ficou no mesmo lugar");
        printf("\n%s est� na casa: %d\n ", nome1, casa1);
    }

    if(casa1==31){
        printf("\n\nEsqueceu de desligar a luz, perdeu a vez!");
        int passo=0;
            while(passo<1){
      for(passo=0; passo<1; passo++){
       srand(time(NULL));
       numero = rand()%6+1;
       casa = casa + numero;
       printf("\nO n�mero do dado � %d", numero);
       printf("\nO computador est� na casa: %d\n ", casa);
            }
        }
    }

    if(casa1==32){
        printf("\n\nDeixou a porta da geladeira aberta, ent�o ter� de voltar 3 casas!");
        casa1-=3;
        printf("\n%s est� na casa: %d\n ", nome1, casa1);
          }

   if(casa1==33){
        printf("\nLigou o Ar condicionado, ficou no mesmo lugar");
        printf("\n%s est� na casa: %d\n ", nome1, casa1);
    }

    if(casa1==36){
        printf("\n\nEsqueceu de apagar a luz do banheiro, ent�o ter� de voltar 2 casas!");
        casa1-=2;
        printf("\n%s est� na casa: %d\n ", nome1, casa1);
          }

   if(casa1==37){
        printf("\nAbriu a porta da geladeira, ficou no mesmo lugar");
        printf("\n%s est� na casa: %d\n ", nome1, casa1);
    }

      }while(casa<40&&casa1<40);//fim da repeti��o (while) das casas
      if (casa>=40){
      system("cls");
      casa = 40;
      printf("\nO computador est� na casa: %d\n ", casa);
      printf("\n\n\nO vencedor � o computador!\n\n");
    }
    if(casa1>=40){
      system("cls");
      casa1 = 40;
      printf("\n%s est� na casa: %d\n ", nome1, casa1);
      printf("\n\n\n\n\nO vencedor � %s!", nome1);
    }
    }//fim da opc�o 1 do jogador

    if(jogador==2){
      printf("Qual � o nome do jogador?\n");
     scanf("%s", nome1);

     printf("Qual � o nome do segundo jogador?\n");
      scanf(" %s", nome2);
       system("cls");
      tabuleiro();
      int numero =0,casa=0, numero1=0, casa1=0;
        do{
    printf("\n\nAperte enter para sortear o n�mero do dado!!\n");
     getch();
     srand(time(NULL));
    numero = rand()%6+1; //n�mero do dado
    casa = casa + numero;
    printf("\nO n�mero do dado � %d", numero);
    printf("\n%s est� na casa: %d\n ", nome1, casa);


    if(casa==2){
        printf("\n\nSe esqueceu de tirar o celular do carregador, ent�o ter� de voltar 1 casa!");
        casa-=1;
        printf("\n%s est� na casa: %d\n ", nome1, casa);
       }

    if(casa==5){
        printf("\n\nDesligou o Ar condicionado quando saiu de casa, avan�a mais 4 casas");
        casa+=4;
        printf("\n%s est� na casa: %d\n ", nome1, casa);
    }

    if(casa==10){
        printf("\n\nFicou muito tempo no chuveiro, ent�o ter� de voltar 2 casas!");
        casa-=2;
        printf("\n%s est� na casa: %d\n ", nome1, casa);
       }

    if(casa==12){
        printf("\n\nLigou o Micro-ondas, ficou no mesmo lugar");
        printf("\n%s est� na casa: %d\n ", nome1, casa);
    }

     if(casa==13){
        printf("\n\nSe lembrou de apagar a luz quando foi dormir, avan�a mais 3 casas");
        casa+=3;
        printf("\n%s est� na casa: %d\n ", nome1, casa);
    }

    if(casa==15){
        printf("\n\nDemorou pouco no banho, avan�a mais 3 casas");
        casa+=3;
        printf("\n%s est� na casa: %d\n ", nome1, casa);
    }

    if(casa==17){
        printf("\n\nLigou a TV para assistir, ficou no mesmo lugar");
        printf("\n%s est� na casa: %d\n ", nome1, casa);
    }

    if(casa==19){
        printf("\n\nLigou a TV enquanto est� no celular, perdeu a vez!");
       int passo=0;
        while(passo<2){
            for(passo=0; passo<2; passo++){

       numero1 = rand()%6+1;
       casa1 = casa1 + numero1;
       printf("\nO n�mero do dado � %d", numero1);
       printf("\n%s est� na casa: %d\n ", nome2, casa1);
            }
        }
    }

    if(casa==23){
        printf("\n\nLigou a TV enquanto est� no celular, perdeu a vez!");
       int passo=0;
        while(passo<2){
            for(passo=0; passo<2; passo++){

       numero1 = rand()%6+1;
       casa1 = casa1 + numero1;
       printf("\nO n�mero do dado � %d", numero1);
       printf("\n%s est� na casa: %d\n ", nome2, casa1);
            }
        }
    }

    if(casa==24){
        printf("\n\nTirou o carregador do celular quando a bateria estava completa, avan�a mais 2 casas");
        casa+=2;
        printf("\n%s est� na casa: %d\n ", nome1, casa);
    }

    if(casa==28){
        printf("Ligou o computador, ficou no mesmo lugar");
        printf("\n%s est� na casa: %d\n ", nome1, casa);
    }

    if(casa==31){
        printf("\n\nEsqueceu de desligar o chuveiro, perdeu a vez!");
       int passo=0;
    while(passo<2){
      for(passo=0; passo<2; passo++){

       numero1 = rand()%6+1;
       casa1 = casa1 + numero1;
       printf("\nO n�mero do dado � %d", numero1);
       printf("\n%s est� na casa: %d\n ", nome2, casa1);
            }
        }
    }

    if(casa==32){
        printf("\n\nDeixou a porta da geladeira aberta, ent�o ter� de voltar 3 casas!");
        casa-=3;
        printf("\n%s est� na casa: %d\n ", nome1, casa);
       }

    if(casa==33){
        printf("\nLigou o Ar condicionado, ficou no mesmo lugar");
        printf("\n%s est� na casa: %d\n ", nome1, casa);
    }

     if(casa==36){
        printf("\n\nEsqueceu de apagar a luz do banheiro, ent�o ter� de voltar 2 casas!");
        casa-=2;
        printf("\n%s est� na casa: %d\n ", nome1, casa);
       }

     if(casa==37){
        printf("\nAbriu a porta da geladeira, ficou no mesmo lugar");
        printf("\n%s est� na casa: %d\n ", nome1, casa);
    }


    printf("\n\nAperte enter para sortear o n�mero do dado!!\n");
    getch();
    numero1 = rand()%6+1; //n�mero do dado
    casa1 = casa1 + numero1;
    printf("\nO n�mero do dado � %d", numero1);
    printf("\n%s est� na casa: %d\n ", nome2, casa1);



    if(casa1==2){
        printf("\n\nSe esqueceu de tirar o celular do carregador, ent�o ter� de voltar 1 casa!");
        casa1-=1;
        printf("\n%s est� na casa: %d\n ", nome2, casa1);
          }

    if(casa1==5){
        printf("\n\nDesligou o Ar condicionado quando saiu de casa, avan�a mais 4 casas");
        casa1+=4;
        printf("\n%s est� na casa: %d\n ", nome2, casa1);
    }


    if(casa1==10){
        printf("\n\nFicou muito tempo no chuveiro, ent�o ter� de voltar 2 casas!");
        casa1-=2;
        printf("\n%s est� na casa: %d\n ", nome2, casa1);
          }

   if(casa1==12){
        printf("\n\nLigou o Micro-ondas, ficou no mesmo lugar");
        printf("\n%s est� na casa: %d\n ", nome2, casa1);
    }

    if(casa1==13){
        printf("\n\nSe lembrou de apagar a luz quando foi dormir, avan�a mais 3 casas");
        casa1+=3;
        printf("\n%s est� na casa: %d\n ", nome2, casa1);
    }

    if(casa1==15){
        printf("\n\nDemorou pouco no banho, avan�a mais 3 casas");
        casa1+=3;
        printf("\n%s est� na casa: %d\n ", nome2, casa1);
    }

   if(casa1==17){
        printf("\n\nLigou a TV para assistir, ficou no mesmo lugar");
        printf("\n%s est� na casa: %d\n ", nome2, casa1);
    }


    if(casa1==19){
        printf("\n\nLigou a TV enquanto est� no celular, perdeu a vez!");
       int passo=0;
            while(passo<2){
      for(passo=0; passo<2; passo++){

       numero = rand()%6+1;
       casa = casa + numero;
       printf("\nO n�mero do dado � %d", numero);
       printf("\n%s est� na casa: %d\n ", nome1, casa);
            }
        }
    }

    if(casa1==23){
        printf("\n\nLigou a TV enquanto est� no celular, perdeu a vez!");
       int passo=0;
            while(passo<2){
      for(passo=0; passo<2; passo++){//se ficar dando mais do que duas vezes coloca 1, � um erro no sistema

       numero = rand()%6+1;
       casa = casa + numero;
       printf("\nO n�mero do dado � %d", numero);
       printf("\n%s est� na casa: %d\n ", nome1, casa);
            }
        }
    }


    if(casa1==24){
        printf("\n\nTirou o carregador do celular quando a bateria estava completa, avan�a mais 2 casas");
        casa1+=2;
        printf("\n%s est� na casa: %d\n ", nome2, casa1);
    }



   if(casa1==28){
        printf("\n\nLigou o computador, ficou no mesmo lugar");
        printf("\n%s est� na casa: %d\n ", nome2, casa1);
    }


    if(casa1==31){
        printf("\n\nEsqueceu de desligar o chuveiro, perdeu a vez!");
       int passo=0;
    while(passo<2){
      for(passo=0; passo<2; passo++){

       numero = rand()%6+1;
       casa = casa + numero;
       printf("\nO n�mero do dado � %d", numero);
       printf("\n%s est� na casa: %d\n ", nome1, casa);
            }
        }
    }



    if(casa1==32){
        printf("\n\nDeixou a porta da geladeira aberta, ent�o ter� de voltar 3 casas!");
        casa1-=3;
        printf("\n%s est� na casa: %d\n ", nome2, casa1);
          }



   if(casa1==33){
        printf("\nLigou o Ar condicionado, ficou no mesmo lugar");
        printf("\n%s est� na casa: %d\n ", nome2, casa1);
    }



    if(casa1==36){
        printf("\n\nEsqueceu de apagar a luz do banheiro, ent�o ter� de voltar 2 casas!");
        casa1-=2;
        printf("\n%s est� na casa: %d\n ", nome2, casa1);
          }

   if(casa1==37){
        printf("\nAbriu a porta da geladeira, ficou no mesmo lugar");
        printf("\n%s est� na casa: %d\n ", nome2, casa1);
    }

      }while(casa<40&&casa1<40);
      if (casa>=40){
      system("cls");
      casa = 40;
      printf("\n%s est� na casa: %d\n ", nome1, casa);
      printf("\n\n\n\n\nO vencedor � %s!", nome1);
    }
    if(casa1>=40){
      system("cls");
      casa1 = 40;
      printf("\n%s est� na casa: %d\n ", nome2, casa1);
      printf("\n\n\n\n\nO vencedor � %s!", nome2);
    }
    }//fim da opc�o 2 do jogador



 }//Fim do novo jogo
  if(opcao ==2){
    printf("\n\n\tO objetivo do jogo � chegar at� o final do percurso, passando por obst�culos.");
    printf("\n\tO n�mero � sorteado aleatoriamente e nisso avan�a nas casas do percurso, algumas quando parar vai regresar,");
    printf("\n\t outras ir� avan�ar ou ter�o de deixar de jogar na pr�xima rodada.");
    printf("\n\n\tDesenvolvido por Bruno Brum Tavares e Claudiane Maria da Silva.");
    sleep(15);
    system("cls");
    return main();
        }

  if(opcao==3){
   printf("\n\nPressione qualquer tecla para finalizar.\n");
   getchar();

  }


  return 0;
}

