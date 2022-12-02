<?php
namespace App\Helpers\DataBuilders;
class ServicoDataBuilder{
    private $v = [
   
        ['email'=>'larson.dovie@example.com', 'servico'=> 'Luz de LED', 'categoria'=>'Moto', 'dia' =>'2019-03-07'],
        ['email'=>'ipredovic@example.net', 'servico'=> 'Modificação Interna', 'categoria'=>'Carro', 'dia' =>'2018-05-25'],
        ['email'=>'juliana@example.net', 'servico'=> 'Pintura', 'categoria'=>'Moto', 'dia' =>'2022-05-17']
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

    public function getRow(){
        $v = ['email'=> 'luciano@example.com', 'servico' =>'Modificação Interna', 'categoria'=>'Moto', 'dia'=>'2019-02-14'];
        return $v;
    }
}