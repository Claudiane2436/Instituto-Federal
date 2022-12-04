/*Escreva um programa que receba as seguintes informações: um valor real indicando capital inicial PV, um valor 
real que corresponde a taxa de juros da aplicação J e um número inteiro de períodos da aplicação N. O programa 
deve retornar o capital futuro FV dado pela relação abaixo:
FV = PV * ( 1 + J )N */
import java.util.Scanner;
public class VinteTres {
    
    public static void main(String[] args){
        Scanner ler = new Scanner(System.in);
        int N;
        double PV, J, FV;
        System.out.println("Capital inicial:");
        PV = ler.nextFloat();
        System.out.println("Juro da aplicação:");
        J = ler.nextFloat();
        System.out.println("Períodos da aplicação:");
        N = ler.nextInt();
        FV = (PV *(1 +Math.pow(J, N)));
        System.out.printf("O capital futuro é %f\n", FV);
       
    }
}
