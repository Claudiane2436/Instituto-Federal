<?php
namespace App\Helpers\DataBuilders;
class FornecedorDataBuilder{
private $v = [
   
        ['nome'=> 'Luiz da Paz', 'telefone' =>'98745413'],
        ['nome'=> 'Joana de Souza', 'telefone' =>'98755713'],
        ['nome'=> 'Monique Alvez', 'telefone' =>'97680313'],
        ['nome'=> 'Anton Perreira', 'telefone' =>'97725313'],
        ['nome'=> 'Ives de Lima', 'telefone' =>'94485313']
  
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
        $v = ['nome'=> 'Ben da Vida', 'telefone' =>'998435313'];
        return $v;
    }
}