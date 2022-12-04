//Leia um número qualquer fornecido pelo usuário. Determine se o número é maior do que 50,
// imprimindo uma mensagem indicando tal fato.
import java.util.Scanner;
public class tres {
    public static void main(String[] args){
        Scanner ler = new Scanner(System.in); 
        int n;
        System.out.println("Digite um número:");
        n = ler.nextInt();
        if(n >50){
        System.out.printf("O número é maior do que 50.");
        }
    }
}
