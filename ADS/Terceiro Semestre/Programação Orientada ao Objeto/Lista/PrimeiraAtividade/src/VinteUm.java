/*Faça um algoritmo que, lendo 3 números correspondentes aos coeficientes a, b, e c de uma equação do 2º grau, 
calcule seu DELTA e também as raízes desta equação, imprimindo seus valores. */
import java.util.Scanner;
public class VinteUm {
    public static void main(String[] args){
        Scanner ler = new Scanner(System.in);
        int a, b,c, for1;
        double for2, for3;
        System.out.println("Digite  o coeficiente A:");
        a = ler.nextInt();
        System.out.println("Digite  o coeficiente B:");
        b = ler.nextInt();
        System.out.println("Digite  o coeficiente C:");
        c = ler.nextInt();
        for1 = (b*b)-4*a*c;
        System.out.printf("O valor do delta é %d\n", for1);
        for2 = (-b+Math.sqrt(for1))/2*a;
        for3 = (-b-Math.sqrt(for1))/2*a;
        System.out.printf("O valor das raizes é %f e %f\n", for2, for3);
       
    }
}
