/*Considerando um objeto móvel em movimento uniformemente variado, escreva um programa que receba as seguintes
informações: um valor real indicando posição inicial do móvel P0, um valor real que corresponde a velocidade do
móvel V, um outro valor real A correspondente a aceleração do móvel e um número inteiro correspondente ao tempo 
decorrido T. O programa deve calcular a posição final PF do móvel, dado pela relação abaixo: PF = P0 + V * T + 
(A * T2) / 2 */
import java.util.Scanner;
public class VinteDois {
    public static void main(String[] args){
        Scanner ler = new Scanner(System.in);
        int T;
        double PO, V, A, PF;
        System.out.println("Posição inicial do móvel:");
        PO = ler.nextFloat();
        System.out.println("Velocidade do móvel:");
        V = ler.nextFloat();
        System.out.println("Acerelação do móvel:");
        A = ler.nextFloat();
        System.out.println("Tempo decorrido:");
        T = ler.nextInt();
        PF = (PO + V *T +(A *T*T))/2;
        System.out.printf("A posição final do móvel é %f\n", PF);
       
    }
}
