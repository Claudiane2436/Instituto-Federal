<?php
namespace App\Helpers\DataBuilders;
class VeiculoDataBuilder{


    private $v = [
   
        ['cliente_id'=> '1', 'tipo' =>'Carro', 'marca'=>'Audi', 'modelo'=>'Audi A6', 'placa'=>'FRD8745', 'ano'=>2015],
        ['cliente_id'=> '2', 'tipo' =>'Moto', 'marca'=>'Avelloz', 'modelo'=>'AZ1', 'placa'=>'CLO8745', 'ano'=>2017],
        ['cliente_id'=> '3', 'tipo' =>'Carro', 'marca'=>'Alpine', 'modelo'=>'Coupé 2+2', 'placa'=>'FAO7765', 'ano'=>2018]
  
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
        $v = ['cliente_id'=> '2', 'tipo' =>'Moto', 'marca'=>'Kawasaki', 'modelo'=>'Ninja ZX-10R', 'placa'=>'FDSO7965', 'ano'=>2020];
        return $v;
    }
}