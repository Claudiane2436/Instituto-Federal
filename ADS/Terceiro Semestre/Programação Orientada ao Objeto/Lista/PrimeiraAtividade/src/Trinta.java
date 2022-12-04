/*Escreva um programa que calcule o valor de y = f(x) = a*x + b num intervalo de valores de x, sendo dados pelo
usuário os coeficientes a e b, bem como os valores do limite inferior e superior do intervalo de x bem como 
o valor do incremento de x. O programa deve exibir resultados como um tabela onde constam os valores 
de x e y=f(x) lado a lado. */
import java.util.Scanner;
public class Trinta {
    public static void main(String[] args){
        Scanner ler = new Scanner(System.in);
        int A, B, x=0;
        System.out.println("Digite o coeficiente A:");
        A = ler.nextInt();
        System.out.println("Digite o coeficiente B:");
        B = ler.nextInt();
        while (x<=9){
            x++;
        System.out.printf(" ________________________________________\n");
        System.out.printf("|___y=f(%d)_=___|___%d * %d + %d__|__= %d___|\n", x, A, x, B, A*x+B);
        
        }
    }
        
        
    
}
