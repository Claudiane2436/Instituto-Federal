<?php
namespace App\Helpers\DataBuilders;
class ProdutoDataBuilder{
    private $v = [
   
        ['fornecedor_id'=> '1', 'nome' =>'Distribuidor', 'categoria'=>'Carro', 'estoque'=> '3', 'preco'=>152.58],
        ['fornecedor_id'=> '2', 'nome' =>'Tinta', 'categoria'=>'Moto', 'estoque'=> '2', 'preco'=>25.40]
    ];

    public function getData(){
        $now = date('Y-m-d H:i:s');
        $aux = [];
        foreach($this->v as $row){
            $row['created_at'] = $now;
            $row['updated_at'] = $now;
            $aux[]= $row;
        }

        return $aux;
    }
}