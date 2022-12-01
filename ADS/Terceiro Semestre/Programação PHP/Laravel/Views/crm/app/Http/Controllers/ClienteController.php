<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClienteModel;
use App\Libraries\Components\Table;


class ClienteController extends Controller
{
    public function cadastro(){
        $vm = new ClienteModel();
        $vm->registraCliente();
        return view('mdb.forms.cliente');
    }
   public function lista(){
        $header =['Nome', 'Sobrenome', 'Email', 'CPF', 'Gênero', 'Telefone'];

        $vm = new ClienteModel();
        $body = $vm->listaCliente();
        $table = new Table($header, $body->toArray());
        return view('site.lista.cliente-lista', ['table' =>$table->getHTML()]);
    }
}
