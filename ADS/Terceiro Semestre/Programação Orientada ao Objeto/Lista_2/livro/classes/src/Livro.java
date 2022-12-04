public class Livro {
   public String nome;
   public int codigo;
   public String categoria;
   public String autor;
   public String dataRetirada;
   public String dataEntrega;

   public Livro(String nome, int codigo, String categoria, String autor, String dataRetirada, String dataEntrega){
    this.nome = nome;
    this.codigo = codigo;
    this.categoria = categoria;
    this.autor = autor;
    this.dataRetirada = dataRetirada;
    this.dataEntrega = dataEntrega;
   }
}