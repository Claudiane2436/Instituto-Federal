//Escreva um programa que leia um número real fornecido pelo usuário,
// armazenando-o numa variável apropriada.Imprima o valor lido.
import java.util.Scanner;
public class dois {
    public static void main(String[] args){
        Scanner ler = new Scanner(System.in); 
        float n;
        System.out.println("Digite um número real:");
        n = ler.nextFloat();//nextInt serve para entrada de dados do tipo float
        System.out.printf("O número lido foi %f", n);
    }
}
