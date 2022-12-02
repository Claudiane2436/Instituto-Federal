<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Servico;

class ServicoModel extends Model
{
    public function registraServico(){
        if(sizeof($_POST)==0) return;
           $req = request();
   
       $data = $req->validate([
                'email'=> 'required|email',
               'servico'=>'required|string',
               'categoria'=> 'required|string',
               'dia'=>'required|size:10'
       ]);
   
       $servico = new Servico();
       $servico->create($data);
      }
   
      public function listaServico(){
       $servico = new Servico();
       return $servico->select('servico','email','categoria','dia')->get();
      }
}
