<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Veiculo;

class VeiculoModel extends Model
{
    public function registraVeiculo(){
        if(sizeof($_POST)==0) return;
           $req = request();
   
       $data = $req->validate([
               'cliente_id'=>'required',
               'tipo'=>'required|string',
                'marca'=>'required|string',
                'modelo'=>'required|string',
                'placa' => 'required|string',
                'ano'=>'required|min:4|int'
       ]);
   
       $veiculo = new Veiculo();
       $veiculo->create($data);
      }
   
      public function listaVeiculo(){
       $veiculo = new Veiculo();
       return $veiculo->select('cliente_id','tipo','marca', 'modelo','placa','ano')->get();
      }
}
