import java.util.Scanner;
public class Quatro {
 public static void main(String[] args) {
 Scanner ler = new Scanner(System.in);
 String nome;
 int qd;
 float preco, total;

 System.out.println("Nome do produto:");
 nome = ler.nextLine();
 System.out.println("Preço do produto");
 preco = ler.nextFloat();
 System.out.println("Quantidade do produto");
 qd = ler.nextInt();
 if(qd<=10){
    System.out.printf("O preço total do(a) %s é de %f \n", nome, preco*qd);
 }
 if((qd>10) && (qd<=20)){
    total = preco*qd;
    System.out.printf("O preço total do(a) %s com 10% de desconto é de %f", nome, (10*total)/100);
 }
 if((qd>20) && (qd<=50)){
    total = preco*qd;
    System.out.printf("O preço total do(a) %s com 20% de desconto é de %f", nome, (20*total)/100);
 }
 if(qd>50){
    total = preco*qd;
    System.out.printf("O preço total do(a) %s com 25% de desconto é de %f", nome, (25*total)/100);
 }

 


 }
}