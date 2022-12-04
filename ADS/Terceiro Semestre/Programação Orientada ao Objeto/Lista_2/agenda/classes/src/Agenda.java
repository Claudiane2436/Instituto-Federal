import java.util.ArrayList;

public class Agenda {

    
    public static void main(String[] args) throws Exception {
       

        Contato cont1 = new Contato("Maria de Souza", "mariada8745@gmail.com", 987451542);
        Contato cont2 = new Contato("Fabio de Rodrigues", "fabiode78456@hotmail.com", 987851422);
        Contato cont3 = new Contato("Paulo de Lima", "limadepaulo8745@hotmail.com", 977841122);
        System.out.println("----- Agenda de Contato -------");
        System.out.println("Nome: " + cont1.nome);
        System.out.println("Email: " + cont1.email);
        System.out.println("Celular: " + cont1.celular);
        System.out.println("\nNome: " + cont2.nome);
        System.out.println("Email: " + cont2.email);
        System.out.println("Celular: " + cont3.celular);
        System.out.println("\nNome: " + cont3.nome);
        System.out.println("Email: " + cont3.email);
        System.out.println("Celular: " + cont3.celular);
    }
}
