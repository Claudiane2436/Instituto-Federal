/*Calcule a média de Notas de alunos. O programa deve parar de ler valores quando for fornecido um valor
negativo como nota. */
import java.util.Scanner;
public class VinteSete {
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
            System.out.printf("A média é %f.\n", media);
            while (n1>0||n2>0||n3>0){
                System.out.printf("Digite a nota:\n");
                n1 = ler.nextFloat();
                if(n1<0){
                    break;
                }
                System.out.printf("Digite a segunda nota:\n");
                n2 = ler.nextFloat();
                if(n2<0){
                    break;
                }
                System.out.printf("Digite a terceira nota:\n");
                n3 = ler.nextFloat();
                if(n3<0){
                    break;
                }
                media = (n1+n2+n3)/3;
                System.out.printf("A média é %f.\n", media);
            }
        }
}
