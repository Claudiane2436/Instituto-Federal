public class Nove {
    public static void main(String[] args) {
        for (int i = 2; i <= 8; i = i + 2) {
            for (int j = i; j <= 10; j++) { // loop vai ate o j seja menor ou igual a 4
                    for (int k = 1; k <= j; k = k + i) {// loop vai até o k seja menor ou igual a j
                    System.out.println(i + ", " + j + ", " + k);
                    }
                }
            }
        }

        //É uma sequencia de número que apenas muda no meio e fim e quando acaba as posibilidades troca 
        //o primeiro número.
}
