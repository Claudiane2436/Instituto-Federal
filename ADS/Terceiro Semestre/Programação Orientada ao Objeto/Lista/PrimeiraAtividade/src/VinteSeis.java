//Escreva um programa que calcule a soma de N números quaisquer fornecidos pelo usuário. 
//O programa deve parar de ler e, portanto somar os valores quando for introduzido o número 0 (zero).
import java.util.Scanner;
public class VinteSeis {
    public static void main(String[] args){
        Scanner ler = new Scanner(System.in);
        int n, x=0;
        System.out.println("Digite um número:");
        n = ler.nextInt();
        while (n>0){
            
            x +=n;
            System.out.println("Digite um número:");
            n = ler.nextInt();
            
        }
        System.out.printf("A soma dos números é %d", x);
        
    }
}
