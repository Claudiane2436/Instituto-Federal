//Escreva um programa que leia dois números inteiros A e B quaisquer indicando se A é 
//múltiplo de B ou se B é múltiplo de A.
import java.util.Scanner;
public class onze {
    public static void main(String[] args){
    Scanner ler = new Scanner(System.in); 
        int n1, n2;
        System.out.println("Digite um número:");
        n1 = ler.nextInt();
        System.out.println("Digite o segundo número:");
        n2 = ler.nextInt();
        
        if(n1 % n2==0){
            System.out.printf("%d é multiplo de %d", n1 ,n2);
        }
        else{
            System.out.printf("%d não é multiplo de %d", n1 ,n2);
        }

        if(n2 % n1==0){
            System.out.printf(" %d é multiplo de %d", n2 ,n1);
        }
        else{
            System.out.printf("\n%d não é multiplo de %d", n2 ,n1);
        }
    }
}
