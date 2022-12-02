<?php

namespace App\Http\Controllers;

use App\Models\ProdutoModel;
use App\Libraries\Components\Table;

class ProdutoController extends Controller
{
    public function cadastro(){
        $vm = new ProdutoModel();
        $vm->registraProduto();
        return view('mdb.forms.produto');
    }
   public function lista(){
        $header =['Código do Fornecedor', 'Nome', 'Categoria', 'Estoque', 'Preço'];

        $vm = new ProdutoModel();
        $body = $vm->listaProduto();
        $table = new Table($header, $body->toArray());
        return view('site.lista.produto-lista', ['table' =>$table->getHTML()]);
    }
}
