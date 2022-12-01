<?php
namespace App\Helpers\DataBuilders;
class FornecedorDataBuilder{
private $v = [
   
        ['nome'=> 'Luiz da Paz', 'telefone' =>'98745413'],
        ['nome'=> 'Joana de Souza', 'telefone' =>'98755713'],
        ['nome'=> 'Joaquim Oliveira', 'telefone' =>'98425313']
  
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