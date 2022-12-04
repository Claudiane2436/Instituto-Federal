//Dado um número inteiro qualquer, fornecido pelo usuário, descobrir se o mesmo é par ou ímpar.

import java.util.Scanner;
public class cinco {
    public static void main(String[] args){
        Scanner ler = new Scanner(System.in); 
        int n;
        System.out.println("Digite um número:");
        n = ler.nextInt();
        if(n%2==0){//o resto da divisão
            System.out.printf("O número %d é par.", n);
        }
        else{
            System.out.printf("O número %d é Impar.", n);
        }
    }
}
