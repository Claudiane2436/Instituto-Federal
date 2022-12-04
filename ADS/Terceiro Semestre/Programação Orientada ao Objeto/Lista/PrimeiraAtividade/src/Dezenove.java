/*Escreva um programa que leia um número real entre 0.00 e 100.00 e o exiba por extenso como se fosse 
uma quantia em dinheiro, por exemplo: 1.00 -> "um real", .12.73 -> "doze reais e setenta e três centavos". */
import java.util.Scanner;
public class Dezenove {
    public static void main(String[] args){
        Scanner ler = new Scanner(System.in);
        float x;
        System.out.println("Digite um valor:");
        x = ler.nextFloat();
        if(x<=0.99){
            System.out.printf("%f centavos", x);
        }
        if((x>1.00)&(x<=100.00)){
            System.out.printf("%f reais e centavos", x);
        }
    }
    
    
}
