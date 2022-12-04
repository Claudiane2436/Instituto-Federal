/*Dados 3 valores reais representando os lados de um possível triângulo, verifique se os mesmos 
formam um triângulo (amedida de qualquer um de seus lados deve ser menor que a soma das medidas
 dos lados restantes). Caso seja formado um triângulo, descubra também se este triângulo é escaleno 
(três lados diferentes), isósceles (dois lados iguais) ou eqüilátero (três lados iguais). */
import java.util.Scanner;
public class Treze {
    public static void main(String[] args){
        Scanner ler = new Scanner(System.in);
        int lado1, lado2, lado3, md1, md2, md3;
        System.out.printf("Digite a medida:\n");
        lado1 = ler.nextInt();
        System.out.printf("Digite a segunda medida:\n");
        lado2 = ler.nextInt();
        System.out.printf("Digite a terceira medida:\n");
        lado3 = ler.nextInt();
        md1 = lado2+lado3;
        md2 = lado1 + lado3;
        md3 = lado1+lado2;
        if(((md1>lado1)&&(md2>lado2)&&(md3>lado3))){
            System.out.printf("Ele é um triângulo\n");

            if((lado1==lado2)&&(lado1==lado3)){
                System.out.printf("O triângulo é um equilátero\n");
            }
            else 
            if(((lado1==lado2)||(lado1==lado3)||(lado2==lado3))){
                System.out.printf("O triângulo é um isósceles\n");
            }
           else{
            System.out.printf("O triângulo é um escaleno\n");    
            }
        }
        else{
            System.out.printf("Ele não é um triângulo\n");
        }

        
    }
    
}