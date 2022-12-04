/*Escreva um programa que leia 3 notas (valores reais), calculando e exibindo sua média aritmética.
 Imprima também "Aprovado" se a média for maior que 7, "Reprovado" se for menor que 3 e "Exame" 
 se estiver entre 3 e 7. */
import java.util.Scanner;
public class Quatorze {
    public static void main(String[] args){
    Scanner ler = new Scanner(System.in);
        float n1, n2, n3, media;
        System.out.printf("Digite a nota:\n");
        n1 = ler.nextFloat();
        System.out.printf("Digite a segunda nota:\n");
        n2 = ler.nextFloat();
        System.out.printf("Digite a terceira nota:\n");
        n3 = ler.nextFloat();
        media = (n1+n2+n3)/3;
        if(media<3){
            System.out.printf("Reprovado a sua média é %f:\n", media);
        }
        if((media>=3)&&(media<=7)){
            System.out.printf("Precisa fazer o exame a sua media é %f:\n", media);
        }
        if(media>7){
            System.out.printf("Parabéns está aprovado a sua média é %f:\n", media);
        }
    }
}
