<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;

class ClienteModel extends Model
{
    use HasFactory;
    public function registraCliente(){
        if(sizeof($_POST)==0) return;
           $req = request();
   
       $data = $req->validate([
               'nome'=>'required|min:2|max:20|string',
               'snome'=>'required|max:100|string',
               'email'=> 'required|email',
               'cpf'=> 'integer|min:9999999999|max:99999999999',
               'genero'=>'int:[0,1,2]',
               'telefone'=>'required|max:20'
       ]);
   
       $cliente = new cliente();
       $cliente->create($data);
      }
   
      public function listaCliente(){
       $cliente = new Cliente();
       return $cliente->select('nome','snome', 'email', 'cpf', 'genero', 'telefone')->get();
      }
}
