import java.util.Scanner;
public class Tres {
 public static void main(String[] args) {
 Scanner teclado = new Scanner(System.in);
 double x1, y1, x2, y2, distancia, distancia2;

 System.out.println("Entre com as coordenadas x e y dos pontos nesta ordem:");
 x1 = teclado.nextFloat();
 y1 = teclado.nextFloat();
 x2 = teclado.nextFloat();
 y2 = teclado.nextFloat();

 distancia = (Math.pow(x2-x1, 2) + Math.pow(y2-y1, 2));
 /* distancia = Math.pow(Math.pow(x2-x1, 2) + Math.pow(y2-y1, 2), 1/2); o problema está na potência quando este
valor é elevado a zero o resultado será 1 */
 distancia2 = Math.sqrt(distancia);
 
 System.out.println("A distância é: " + distancia2);

 }
}