//Faça um programa que calcule a soma de N números quaisquer fornecidos pelo usuário
import java.util.Scanner;
public class VinteCinco {
    public static void main(String[] args){
        Scanner ler = new Scanner(System.in);
        int n, x;
        System.out.println("Digite um número:");
        n = ler.nextInt();
        
        for(x=0; x<=10; x++){
            System.out.printf("%d + %d = %d\n", n,x, n+x);
        }
       
        
    }
}
