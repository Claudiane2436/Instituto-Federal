import java.util.Random;

public class Quatorze {
    public static void main(String[] args){
    int num= 50;
    int[] vetor1 = new int[num];
   int[] vetor2 = new int[num];
    int x;
    Random tab = new Random();

    System.out.println("\n---- Vetor 1 nao ordenado ---- \n");
    for (int i = 0; i < vetor1.length; i++) {
        if (i == vetor1.length - 1) {
            System.out.println(vetor1[i]);
            break;
        }
        vetor1[i] = tab.nextInt(num);
        System.out.print(vetor1[i] + "" +
                ", ");

    }
    ordena(vetor1);
    System.out.print("\n ------ Vetor 1 ordenado ------  \n");
    for (int i = 0; i < vetor1.length; i++) 
    System.out.print(vetor1[i] + " ");

    System.out.println("\n---- Vetor 2 nao ordenado ---- \n");
    for ( int i = 0 ;i<vetor2.length ;i++){

        if (i== vetor2.length-1){
            System.out.println(vetor2[i]);
            break;
        }
        vetor2[i]= tab.nextInt(50);
        System.out.print(vetor2[i]+ ", ");
}


    ordena(vetor2);
    System.out.print("\n ------ Vetor 2 ordenado ------  \n");
    for (int i = 0; i < vetor2.length; i++) // use length em vez de um valor fixo
        System.out.print(vetor2[i] + " ");
        
        int[] vetor3 = new int[vetor1.length + vetor2.length];
        int i1 = 0, i2 = 0; 
        for (int i = 0; i < vetor3.length; i++) {
        if (vetor1[i1] < vetor2[i2]) { 
        vetor3[i] = vetor1[i1];
        i1++; 
        if (i1 == vetor1.length) {
         
            System.arraycopy(vetor2, i2, vetor3, i + 1, vetor2.length - i2);
            break;
        }
    } else {
        vetor3[i] = vetor2[i2];
        i2++; 
        if (i2 == vetor2.length) {
            
            System.arraycopy(vetor1, i1, vetor3, i + 1, vetor1.length - i1);
            break; 
        }
    }
}
System.out.println("\n\n---------- Vetor 3 -------------");
for (int i = 0; i < vetor3.length; i++)
    System.out.print(vetor3[i] + " ");
    }
    

    

    public static void ordena(int vetor[]) {
        for (int i = 0; i < vetor.length; i++) { 
            for (int j = 0; j < vetor.length - 1; j++) { 
                if (vetor[j] > vetor[j + 1]) {
                    int aux = vetor[j];
                    vetor[j] = vetor[j + 1];
                    vetor[j + 1] = aux;
                }
            }
        }
        
    }

    
}
