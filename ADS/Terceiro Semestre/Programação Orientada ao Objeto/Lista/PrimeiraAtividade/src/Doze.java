/*Escreva um programa capaz de calcular o preço total a ser pago por uma compra de copos plásticos. 
O usuário deve fornecer o número de copos a serem comprados e o programa deve calcular o preço total a
ser cobrado, exibindo-o. Observe que: se o número de copo é inferior ou igual a 100, o preço por copo
é R$0.05; se o número de copos está entre 101 e 500, o preço por copo é R$0.04; finalmente se o
 número de copos é superior a 500 o preço por copo é R$0.035. */
import java.util.Scanner;
public class Doze{
    public static void main(String[] args){
        Scanner ler = new Scanner(System.in);
        int copos;
        double preco;
        System.out.printf("Digite a quantidade de copos:\n");
        copos = ler.nextInt();
        
        if(copos<=100){
            preco = copos * 0.05;
            System.out.printf("O preço que irá pagar é %f:\n", preco);
        }

        if((copos>100)&&(copos <500)){
            preco = copos *0.04;
            System.out.printf("O preço que irá pagar é %f:\n", preco);
        }

        if(copos>500){
            preco = copos *0.0035;
            System.out.printf("O preço que irá pagar é %f:\n", preco);
        }

    }
}