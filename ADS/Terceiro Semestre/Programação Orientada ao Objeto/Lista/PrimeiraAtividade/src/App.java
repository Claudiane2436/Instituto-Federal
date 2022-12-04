//Escreva um programa que leia um número inteiro fornecido pelo usuário, 
//armazenando-o numa variável apropriada. Imprima o valor lido.
import java.util.Scanner;
public class App {
    
    public static void main(String[] args){
        Scanner ler = new Scanner(System.in); //classe Scanner é o mesmo que scanf() no C
        int n;
        System.out.println("Digite um número inteiro:");
        n = ler.nextInt();//nextInt serve para entrada de dados do tipo int
        System.out.printf("O número lido foi %d", n);
    }
}
