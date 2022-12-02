<?php

namespace App\Http\Controllers;


use App\Models\ServicoModel;
use App\Libraries\Components\Table;

class ServicoController extends Controller
{
    public function cadastro(){
        $vm = new ServicoModel();
        $vm->registraServico();
        return view('mdb.forms.servico');
    }
   public function lista(){
        $header =['Email do Cliente', 'Servico','Categoria', 'Data'];

        $vm = new ServicoModel();
        $body = $vm->listaServico();
        $table = new Table($header, $body->toArray());
        return view('site.lista.servico-lista', ['table' =>$table->getHTML()]);
    }
}
