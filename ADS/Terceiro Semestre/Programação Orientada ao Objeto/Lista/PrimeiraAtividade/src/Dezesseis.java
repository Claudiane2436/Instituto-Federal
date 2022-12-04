/*Preparar um programa para ler as medidas da base e da altura de um triângulo, calculando e 
imprimindo sua área, sabendo que o cálculo da área é dado por: area = (base*altura)/2. */
import java.util.Scanner;
public class Dezesseis {
    public static void main(String[] args){
        Scanner ler = new Scanner(System.in);
        int alt, base, area;
        System.out.println("Medida da base do triângulo:");
        base = ler.nextInt();
        System.out.println("Medida da altura do triângulo:");
        alt = ler.nextInt();
        
        area = (base*alt)/2;
        System.out.printf("A área do triângulo é %d", area);
        
    }
}
