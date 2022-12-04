/*Escreva um programa que leia um valor real correspondente a uma medida em metros, convertendo o
valor dado em pés (1 metro = 3.315 pés), exibindo os valores dado e convertido. Caso o usuário forneça
um valor negativo, deve ser exibida uma mensagem e a operação de conversão não deve ser efetuada. */
import java.util.Scanner;
public class Vinte {
    public static void main(String[] args){
        Scanner ler = new Scanner(System.in);
        float x;
        System.out.println("Digite uma medida em metros:");
        x = ler.nextFloat();
        System.out.printf("O valor em pés é %f centavos", x*3.315);
        
       
    }
    
}
