<?php

namespace App\Http\Controllers;

use App\Models\VeiculoModel;
use App\Libraries\Components\Table;

class VeiculoController extends Controller
{
    public function cadastro(){
        $vm = new VeiculoModel();
        $vm->registraVeiculo();
        return view('mdb.forms.veiculo');
    }
   public function lista(){
        $header =['Código do Cliente', 'Tipo de Veículo', 'Marca', 'Modelo', 'Placa', 'Ano'];

        $vm = new VeiculoModel();
        $body = $vm->listaVeiculo();
        $table = new Table($header, $body->toArray());
        return view('site.lista.veiculo-lista', ['table' =>$table->getHTML()]);
    }
}
