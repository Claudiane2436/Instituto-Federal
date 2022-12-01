<?php
namespace App\Helpers\DataBuilders;
class VeiculoDataBuilder{


    private $v = [
   
        ['cliente_id'=> '1', 'tipo' =>'Carro', 'marca'=>'Audi', 'modelo'=>'Audi A6', 'placa'=>'FRD8745', 'ano'=>2015],
        ['cliente_id'=> '2', 'tipo' =>'Moto', 'marca'=>'Avelloz', 'modelo'=>'AZ1', 'placa'=>'CLO8745', 'ano'=>2017]
  
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