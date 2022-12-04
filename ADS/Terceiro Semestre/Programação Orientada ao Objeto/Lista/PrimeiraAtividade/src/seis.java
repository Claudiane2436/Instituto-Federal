//Escreva um programa que leia dois valores, os quais denominaremos A e B, 
//fornecidos pelo usuário, exibindo respostas
//F ou V para as seguintes questões:
//(a) A é maior que zero?
//(b) B é maior que zero;
//(c) A E B são maiores do que zero?
import java.util.Scanner;
public class seis {
    public static void main(String[] args){
        Scanner ler = new Scanner(System.in); 
        int n1, n2;
        System.out.println("Digite um número:");
        n1 = ler.nextInt();
        System.out.println("Digite o segundo número:");
        n2 = ler.nextInt();
        if(n1>0){
            System.out.println("V");
        }
        else{
            System.out.println("F");
        }
        if(n2>0){
            System.out.println("V");
        }
        else{
            System.out.println("F");
        }
        if(n1>0 && n2>0){
            System.out.println("V");
        }
        else{
            System.out.println("F");
        }
    }
}
