/*Escreva um programa que realize as seguintes tarefas:
a) Efetue a leitura de dois valores inteiros, os quais serão denominados x e y;
b) Realize a soma dos valores x e y, exibindo seu resultado;
c) Realize o produto dos valores x e y exibindo seu resultado;
d) Compare os valores x e y, indicando se "X > Y", "X = Y" e "X < Y" para os casos correspondentes. */
import java.util.Scanner;
public class Quinze {
    public static void main(String[] args){
        Scanner ler = new Scanner(System.in);
        int x, y;
        System.out.println("Digite um número:");
        x = ler.nextInt();
        System.out.println("Digite o segundo número:");
        y = ler.nextInt();
        System.out.printf("A soma dos valores x e y é %d\n", x+y);
        System.out.printf("O produto dos valores x e y é %d\n", x*y);
        if(x>y){
            System.out.printf("%d > %d ", x, y);
        }
        if(x==y){
            System.out.printf("%d = %d ", x, y);
        }
        if(x<y){
            System.out.printf("%d < %d ", x, y);
        }
    }
}
