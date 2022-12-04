//Leia três números reais fornecidos pelo usuário.
// Descubra qual deles é o menor de todos, imprimindo seu valor.
import java.util.Scanner;
public class nove {
    public static void main(String[] args){
        Scanner ler = new Scanner(System.in); 
        int n1, n2, n3;
        System.out.println("Digite um número:");
        n1 = ler.nextInt();
        System.out.println("Digite o segundo número:");
        n2 = ler.nextInt();
        System.out.println("Digite o terceiro número:");
        n3 = ler.nextInt();
        
        if(n1<n2 &&n1<n3){
            System.out.printf("O número %d é o menor", n1);
        }
    
        if(n2<n1 &&n2<n3){
            System.out.printf("O número %d é o menor", n2);
        }
        if(n3<n1 && n3<n2){
            System.out.printf("O número %d é o menor", n3);
        }
        
        }

}
