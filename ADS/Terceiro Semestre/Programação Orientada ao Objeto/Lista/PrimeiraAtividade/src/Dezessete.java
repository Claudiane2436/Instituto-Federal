/*Escreva um programa que leia um valor inteiro correspondente a uma quantidade de segundos, convertendo o 
valor dado em horas corridas sabendo que 3600 segundos equivalem a 1 hora, exibindo os valores dado e 
convertido. Caso o usuário forneça um valor negativo, deve ser exibida uma mensagem e a operação de 
conversão não deve ser efetuada. */
import java.util.Scanner;
public class Dezessete {

    public static void main(String[] args){
        Scanner ler = new Scanner(System.in);
        int seg;
        System.out.println("Digite um valor:");
        seg = ler.nextInt();
        System.out.printf("O valor em horas é %d hora(s)", seg/3600);
        
    }
}
