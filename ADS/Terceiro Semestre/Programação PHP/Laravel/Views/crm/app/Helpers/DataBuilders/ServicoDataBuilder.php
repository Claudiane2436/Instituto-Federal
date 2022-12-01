<?php
namespace App\Helpers\DataBuilders;
class ServicoDataBuilder{
    private $v = [
   
        ['email'=>'larson.dovie@example.com', 'servico'=> 'Luz de LED', 'categoria'=>'Moto', 'dia' =>'2019-03-07'],
        ['email'=>'ipredovic@example.net', 'servico'=> 'Modificação Interna', 'categoria'=>'Carro', 'dia' =>'2018-05-25']
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