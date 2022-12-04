//Leia um número qualquer fornecido pelo usuário. Determine se
//o número é maior do que 100, imprimindo uma mensagem indicando que
//o "valor é maior que 100" ou uma mensagem indicando que o "valor é menor ou igual a 100".
import java.util.Scanner;
public class quatro {
    public static void main(String[] args){
        Scanner ler = new Scanner(System.in); 
        int n;
        System.out.println("Digite um número:");
        n = ler.nextInt();
        if(n >100){
        System.out.printf("O número é maior do que 100.");
        }
        else{
            System.out.printf("O número é menor ou igual a 100.");
        }
    }
}
