<?php

namespace App\Http\Controllers;
use App\Models\FornecedorModel;
use App\Libraries\Components\Table;

class FornecedorController extends Controller
{
    

    public function cadastro(){
        $vm = new FornecedorModel();
        $vm->registraFornecedor();
        return view('mdb.forms.fornecedor');
    }
   public function lista(){
        $header =['Nome', 'Telefone'];

        $vm = new FornecedorModel();
        $body = $vm->listaFornecedor();
        $table = new TAble($header, $body->toArray());
        return view('site.lista.fornecedor-lista', ['table' =>$table->getHTML()]);
    }
   
}
