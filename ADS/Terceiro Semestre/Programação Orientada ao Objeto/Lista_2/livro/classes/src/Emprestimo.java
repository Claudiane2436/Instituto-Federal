public class Emprestimo {
    public static void main(String[] args) throws Exception {
        Pessoa p1 = new Pessoa("Luiz de Moura", "Rua das Flores", 987454123);
        Pessoa p2 = new Pessoa("Joana das Dores", "Rua dos Nobre", 987464233);

        Livro l1 = new Livro("A Menina que Roubava Livros", 18, "Juventil", "Markus Zusak", "13/05/2015", "23/05/2015");
        Livro l2 = new Livro("Instrumento Mortais", 01, "Aventura", "Cassandra Clare", "05/02/2021", "15/03/2021"  );
        System.out.println(" ------- Empréstimo de Livros ---------");
        System.out.println("Nome: " + p1.nome);
        System.out.println("Endereco: " + p1.endereco);
        System.out.println("Celular: " + p1.celular);

        System.out.println("Nome do Livro: " + l1.nome);
        System.out.println("Código: " + l1.codigo);
        System.out.println("Categoria: " + l1.categoria);
        System.out.println("Autor: " + l1.autor);
        System.out.println("Data da Retirada: " + l1.dataRetirada);
        System.out.println("Data da Entrega: " + l1.dataEntrega);

        System.out.println("\nNome: " + p2.nome);
        System.out.println("Endereco: " + p2.endereco);
        System.out.println("Celular: " + p2.celular);

        System.out.println("Nome do Livro: " + l2.nome);
        System.out.println("Código: " + l2.codigo);
        System.out.println("Categoria: " + l2.categoria);
        System.out.println("Autor: " + l2.autor);
        System.out.println("Data da Retirada: " + l2.dataRetirada);
        System.out.println("Data da Entrega: " + l2.dataEntrega);

    }
}
