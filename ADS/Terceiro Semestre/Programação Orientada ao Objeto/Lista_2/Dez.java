import java.util.Scanner;
public class Dez{
    public static void main(String[] args){
        Scanner ler = new Scanner(System.in);
        int i;
        double taxa, total;
        float preco;
        System.out.printf("Preço investido por mês: ");
        preco = ler.nextFloat();
        System.out.printf("Taxa de juros mensal: ");
        taxa = ler.nextInt();
        for(i=1; i<12; i++){
            preco= preco*i;
            taxa = taxa/100;
            total = (preco*taxa)*12;
            System.out.printf("Saldo do investimento após 1 ano: %f\n", total);
        }
        

    }
}