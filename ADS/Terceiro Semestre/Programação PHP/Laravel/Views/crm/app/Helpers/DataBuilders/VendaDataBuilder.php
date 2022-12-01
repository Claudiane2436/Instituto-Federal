<?php
namespace App\Helpers\DataBuilders;
class VendaDataBuilder{

private $v = [
   
   ['email'=> 'wilkinson.willa@example.com', 'produto' =>'Distribuidor', 'categoria'=>'Carro', 'quantidade'=>2, 'pagamento'=>'Cartão'],
   ['email'=> 'tremblay.queen@example.com', 'produto' =>'Pintura', 'categoria'=>'Moto', 'quantidade'=>3, 'pagamento'=>'Dinheiro']

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