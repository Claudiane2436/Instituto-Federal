<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Venda;

class VendaModel extends Model
{
    public function registraVenda(){
        if(sizeof($_POST)==0) return;
           $req = request();
   
       $data = $req->validate([
               'email'=>'required|email',
               'produto'=>'required|string',
                'categoria'=>'required|string',
                'quantidade'=>'required|int',
                'pagamento' => 'required|string'
       ]);
   
       $venda = new Venda();
       $venda->create($data);
      }
   
      public function listaVenda(){
       $venda = new Venda();
       return $venda->select('email','produto','categoria', 'quantidade','pagamento')->get();
      }
}
