<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;

class ProdutoModel extends Model
{
    public function registraProduto(){
        if(sizeof($_POST)==0) return;
           $req = request();
   
       $data = $req->validate([
               'fornecedor_id'=>'required',
               'nome'=>'required|string',
                'categoria'=>'required|string',
                'estoque'=>'int',
                'preco' => 'required'
       ]);
   
       $produto = new Produto();
       $produto->create($data);
      }
   
      public function listaProduto(){
       $produto = new Produto();
       return $produto->select('fornecedor_id','nome','categoria', 'estoque','preco')->get();
      }
}
