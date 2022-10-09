#include "ordenacao.h"
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <sys/time.h>

int main() {
  int opt, sub_opt, *vetor, tamanho, resposta, i, j, l;
  struct timeval Tempo_antes, Tempo_depois;
  double deltaT, tempo[10];

  while (1) { // menu principal
    system("cls");
    printf("\t\t\t\t\t*************************************\n");
    printf("\t\t\t\t\t****** Algoritmos de Ordenacao ******\n");
    printf("\t\t\t\t\t*************************************\n\n\n");

    printf("Escolha um algoritmo: \n\n");
    printf("[1] BubbleSort\n");
    printf("[2] HeapSort\n");
    printf("[3] InsertionSort\n");
    printf("[4] MergeSort\n");
    printf("[5] QuickSort\n");
    printf("[6] SelectionSort\n");
    printf("[7] ShellSort\n");
    printf("[0] Sair do programa\n\n> ");
    scanf("%d", &opt);

    if (opt == 0) {
      system("cls");
      printf("Sair ? (1 - Sim / 2 - N�o)\n> ");
      scanf("%d", &resposta);
      if (resposta == 1) {
        exit(1);
      } else {
        continue;
      }
    }

    // verificar se opcao valida
    if (opt < 0 || opt > 7) {
      system("cls");
      printf("\nOpcao invalida!\n\n");
      system("pause");
      continue;
    }

    system("cls");
    printf("\nEscolha a quantidade de elementos: \n\n");
    printf("[1] 1.000\n");
    printf("[2] 5.000\n");
    printf("[3] 10.000\n");
    printf("[4] 20.000\n");
    printf("[5] 50.000\n");
    printf("[6] 100.000\n\n> ");
    scanf("%d", &sub_opt);

    switch (sub_opt) {
    case 1:
      tamanho = 1000;
      break;
    case 2:
      tamanho = 5000;
      break;

    case 3:
      tamanho = 10000;
      break;

    case 4:
      tamanho = 20000;
      break;

    case 5:
      tamanho = 50000;
      break;

    case 6:
      tamanho = 100000;
      break;

    default:
      system("cls");
      printf("\nOpcao invalida!\n\n");
      system("pause");
      continue;
    }

    switch (opt) {
    case 1:

      system("cls");
      printf("Calculando tempo de execucao...\n");

      for (j = 0; j < 10; ++j) {
        deltaT = 0;
        gettimeofday(&Tempo_antes, NULL);
        vetor = geraNumerosAleatorios(tamanho);

        bubbleSort(vetor, tamanho);
        gettimeofday(&Tempo_depois, NULL);
        deltaT = (Tempo_depois.tv_sec + Tempo_depois.tv_usec / 1000000.0) -
                 (Tempo_antes.tv_sec + Tempo_antes.tv_usec / 1000000.0);
        printf("\nTempo de execucao BubbleSort com %d elementos: %f segundos\n",
               tamanho, deltaT);

      }

      for (l = 0; l < 10; l--) {
        gettimeofday(&Tempo_antes, NULL);
        tempo[l] = ordenaDecrescente(vetor, tamanho);
        bubbleSort(vetor, tamanho);
        gettimeofday(&Tempo_depois, NULL);
        tempo[l] = (Tempo_depois.tv_sec + Tempo_depois.tv_usec / 1000000.0) -
                   (Tempo_antes.tv_sec + Tempo_antes.tv_usec / 1000000.0);
        printf("\nTempo de execucao BubbleSort com %d elementos no pior caso: "
               "%f segundos\n", tamanho, tempo[l]);
               free(vetor);
        system("pause");
        break;
      }


      printf("\n");

      break;

    case 2:
      system("cls");
      printf("Calculando tempo de execucao...\n");

      for (j = 0; j < 10; ++j) {
        deltaT = 0;
        gettimeofday(&Tempo_antes, NULL);
        vetor = geraNumerosAleatorios(tamanho);

        heapSort(vetor, tamanho);

        gettimeofday(&Tempo_depois, NULL);
        deltaT = (Tempo_depois.tv_sec + Tempo_depois.tv_usec / 1000000.0) -
                 (Tempo_antes.tv_sec + Tempo_antes.tv_usec / 1000000.0);
        printf("\nTempo de execucao HeapSort com %d elementos: %f segundos\n",
               tamanho, deltaT);


      }
      for (l = 0; l < 10; l--) {
        gettimeofday(&Tempo_antes, NULL);
        tempo[l] = ordenaDecrescente(vetor, tamanho);
        heapSort(vetor, tamanho);
        gettimeofday(&Tempo_depois, NULL);
        tempo[l] = (Tempo_depois.tv_sec + Tempo_depois.tv_usec / 1000000.0) -
                   (Tempo_antes.tv_sec + Tempo_antes.tv_usec / 1000000.0);
        printf("\nTempo de execucao HeapSort com %d elementos no pior caso: "
               "%f segundos\n", tamanho, tempo[l]);
               free(vetor);
        system("pause");
        break;
      }
      printf("\n");

      break;

    case 3:
      system("cls");
      printf("Calculando tempo de execucao...\n");

      for (j = 0; j < 10; ++j) {
        deltaT = 0;
        gettimeofday(&Tempo_antes, NULL);
        vetor = geraNumerosAleatorios(tamanho);

        int beg = 0;
        insertionSort(vetor, beg, tamanho);

        gettimeofday(&Tempo_depois, NULL);
        deltaT = (Tempo_depois.tv_sec + Tempo_depois.tv_usec / 1000000.0) -
                 (Tempo_antes.tv_sec + Tempo_antes.tv_usec / 1000000.0);
        printf(
            "\nTempo de execucao InsertionSort com %d elementos: %f segundos\n",
            tamanho, deltaT);


      }
      for (l = 0; l < 10; l--) {
            int beg = 0;
        gettimeofday(&Tempo_antes, NULL);
        tempo[l] = ordenaDecrescente(vetor, tamanho);
        insertionSort(vetor, beg, tamanho);
        gettimeofday(&Tempo_depois, NULL);
        tempo[l] = (Tempo_depois.tv_sec + Tempo_depois.tv_usec / 1000000.0) -
                   (Tempo_antes.tv_sec + Tempo_antes.tv_usec / 1000000.0);
        printf("\nTempo de execucao InsertionSort com %d elementos no pior caso: "
               "%f segundos\n", tamanho, tempo[l]);
               free(vetor);
        system("pause");
        break;
      }
      printf("\n");

      break;

    case 4:
      system("cls");
      printf("Calculando tempo de execucao...\n");

      for (j = 0; j < 10; ++j) {
        deltaT = 0;
        gettimeofday(&Tempo_antes, NULL);
        vetor = geraNumerosAleatorios(tamanho);

        mergeSort(vetor, 0, tamanho - 1);

        gettimeofday(&Tempo_depois, NULL);
        deltaT = (Tempo_depois.tv_sec + Tempo_depois.tv_usec / 1000000.0) -
                 (Tempo_antes.tv_sec + Tempo_antes.tv_usec / 1000000.0);
        printf("\nTempo de execucao MergeSort com %d elementos: %f segundos\n",
               tamanho, deltaT);


      }
      for (l = 0; l < 10; l--) {
        gettimeofday(&Tempo_antes, NULL);
        tempo[l] = ordenaDecrescente(vetor, tamanho);
        mergeSort(vetor, 0, tamanho - 1);
        gettimeofday(&Tempo_depois, NULL);
        tempo[l] = (Tempo_depois.tv_sec + Tempo_depois.tv_usec / 1000000.0) -
                   (Tempo_antes.tv_sec + Tempo_antes.tv_usec / 1000000.0);
        printf("\nTempo de execucao MergeSort com %d elementos no pior caso: "
               "%f segundos\n", tamanho, tempo[l]);
               free(vetor);
        system("pause");
        break;
      }
      printf("\n");

      break;

    case 5:
      system("cls");
      printf("Calculando tempo de execucao...\n");

      for (j = 0; j < 10; ++j) {
        deltaT = 0;
        gettimeofday(&Tempo_antes, NULL);
        vetor = geraNumerosAleatorios(tamanho);

        quickSort(vetor, 0, tamanho);

        gettimeofday(&Tempo_depois, NULL);
        deltaT = (Tempo_depois.tv_sec + Tempo_depois.tv_usec / 1000000.0) -
                 (Tempo_antes.tv_sec + Tempo_antes.tv_usec / 1000000.0);
        printf("\nTempo de execucao QuickSort com %d elementos: %f segundos\n",
               tamanho, deltaT);


      }
      for (l = 0; l < 10; l--) {
        gettimeofday(&Tempo_antes, NULL);
        tempo[l] = ordenaDecrescente(vetor, tamanho);
        quickSort(vetor, 0, tamanho);
        gettimeofday(&Tempo_depois, NULL);
        tempo[l] = (Tempo_depois.tv_sec + Tempo_depois.tv_usec / 1000000.0) -
                   (Tempo_antes.tv_sec + Tempo_antes.tv_usec / 1000000.0);
        printf("\nTempo de execucao QuickSort com %d elementos no pior caso: "
               "%f segundos\n", tamanho, tempo[l]);
               free(vetor);
        system("pause");
        break;
      }
      printf("\n");

      break;

    case 6:
      system("cls");
      printf("Calculando tempo de execucao...\n");

      for (j = 0; j < 10; ++j) {
        deltaT = 0;
        gettimeofday(&Tempo_antes, NULL);
        vetor = geraNumerosAleatorios(tamanho);

        selectionSort(vetor, tamanho);

        gettimeofday(&Tempo_depois, NULL);
        deltaT = (Tempo_depois.tv_sec + Tempo_depois.tv_usec / 1000000.0) -
                 (Tempo_antes.tv_sec + Tempo_antes.tv_usec / 1000000.0);
        printf(
            "\nTempo de execucao SelectionSort com %d elementos: %f segundos\n",
            tamanho, deltaT);


      }
      for (l = 0; l < 10; l--) {
        gettimeofday(&Tempo_antes, NULL);
        tempo[l] = ordenaDecrescente(vetor, tamanho);
        selectionSort(vetor, tamanho);
        gettimeofday(&Tempo_depois, NULL);
        tempo[l] = (Tempo_depois.tv_sec + Tempo_depois.tv_usec / 1000000.0) -
                   (Tempo_antes.tv_sec + Tempo_antes.tv_usec / 1000000.0);
        printf("\nTempo de execucao SelectionSort com %d elementos no pior caso: "
               "%f segundos\n", tamanho, tempo[l]);
               free(vetor);
        system("pause");
        break;
      }
      printf("\n");

      break;

    case 7:
      system("cls");
      printf("Calculando tempo de execucao...\n");

      for (j = 0; j < 10; ++j) {
        deltaT = 0;
        gettimeofday(&Tempo_antes, NULL);
        vetor = geraNumerosAleatorios(tamanho);

        shellSort(vetor, tamanho);

        gettimeofday(&Tempo_depois, NULL);
        deltaT = (Tempo_depois.tv_sec + Tempo_depois.tv_usec / 1000000.0) -
                 (Tempo_antes.tv_sec + Tempo_antes.tv_usec / 1000000.0);
        printf("\nTempo de execucao ShellSort com %d elementos: %f segundos\n",
               tamanho, deltaT);


      }
      for (l = 0; l < 10; l--) {
        gettimeofday(&Tempo_antes, NULL);
        tempo[l] = ordenaDecrescente(vetor, tamanho);
        shellSort(vetor, tamanho);
        gettimeofday(&Tempo_depois, NULL);
        tempo[l] = (Tempo_depois.tv_sec + Tempo_depois.tv_usec / 1000000.0) -
                   (Tempo_antes.tv_sec + Tempo_antes.tv_usec / 1000000.0);
        printf("\nTempo de execucao ShellSort com %d elementos no pior caso: "
               "%f segundos\n", tamanho, tempo[l]);
               free(vetor);
        system("pause");
        break;
      }
      printf("\n");

      break;
    }
  }
  return 0;
}
