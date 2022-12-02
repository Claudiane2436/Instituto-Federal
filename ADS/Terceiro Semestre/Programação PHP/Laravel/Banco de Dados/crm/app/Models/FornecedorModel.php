<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Fornecedor;

class FornecedorModel extends Model
{
   public function registraFornecedor(){
     if(sizeof($_POST)==0) return;
        $req = request();

    $data = $req->validate([
            'nome'=>'required|min:2|max:100|string',
            'telefone'=>'required|max:20'
    ]);

    $fornecedor = new Fornecedor();
    $fornecedor->create($data);
   }

   public function listaFornecedor(){
    $fornecedor = new Fornecedor();
    return $fornecedor->select('nome','telefone')->get();
   }

}
