/*Implementar três programas para exibir a tabuada de um número inteiro entre 1 e 20 dado pelo usuário.
a) Usando enquanto (while)
b) Usando faça-enquanto (do-while)
c) Usando para (for)
Obs. Caso o valor dado seja inválido o programa deve apenas exibir uma mensagem de aviso. */
import java.util.Scanner;
public class VinteQuatro {
    public static void main(String[] args){
        Scanner ler = new Scanner(System.in);
        int n, x=0, op;
        System.out.println("Digite um número:");
        n = ler.nextInt();
        if(n<0){
            System.out.println("Número inválido.");
        }
        else{
            System.out.println("Escolha a opção que deseja:\n 1- Usando enquando\n 2- Usando do while \n 3- Usando for");
            op = ler.nextInt();
            switch(op){
                case 1:
                while(x<=10){
                    System.out.printf("%d x %d = %d\n", n,x, n+x);
                    x++;
                }
                break;
                case 2:
                do{
                    System.out.printf("%d x %d = %d\n", n,x, n*x);
                    x++;
                }while(x<=10);
                break;
                case 3:
                for(x=0; x<=10; x++){
                    System.out.printf("%d x %d = %d\n", n,x, n*x);
                }
                break;
                default:
                System.out.println("Opção inválida.");
                break;
            }
        }
       
        
    }
    
}
