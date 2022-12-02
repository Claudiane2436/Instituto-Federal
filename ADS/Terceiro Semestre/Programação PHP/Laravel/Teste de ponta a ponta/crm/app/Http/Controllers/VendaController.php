<?php

namespace App\Http\Controllers;

use App\Models\VendaModel;
use App\Libraries\Components\Table;

class VendaController extends Controller
{
    public function cadastro(){
        $vm = new VendaModel();
        $vm->registraVenda();
        return view('mdb.forms.venda');
    }
   public function lista(){
        $header =['Email do Cliente', 'Produto', 'Categoria', 'Quantidade', 'Pagamento'];

        $vm = new VendaModel();
        $body = $vm->listaVenda();
        $table = new Table($header, $body->toArray());
        return view('site.lista.venda-lista', ['table' =>$table->getHTML()]);
    }
}
