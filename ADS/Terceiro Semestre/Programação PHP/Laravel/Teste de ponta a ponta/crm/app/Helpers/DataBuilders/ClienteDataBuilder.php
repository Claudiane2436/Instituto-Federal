<?php
namespace App\Helpers\DataBuilders;
class ClienteDataBuilder{
private $v = [
   
        ['nome'=> 'Paulo', 'snome' =>'de Souza', 'email'=>'paulo@example.com', 'cpf'=>'187.576.421.45', 'genero'=>1,  'telefone' =>'98720413'],
        ['nome'=> 'Paula', 'snome' =>'de Moraes', 'email'=>'paula@example.com', 'cpf'=>'147.246.411.58', 'genero'=>2,  'telefone' =>'90000833'],
        ['nome'=> 'Isabela', 'snome' =>'Paixão', 'email'=>'paixao@example.com', 'cpf'=>'147.346.411.78', 'genero'=>2,  'telefone' =>'90450833']
  
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
        $v = ['nome'=> 'João', 'snome' =>'de Souza Santana', 'email'=>'santana@example.com', 'cpf'=>'157.766.411.57', 'genero'=>1,  'telefone' =>'904470833'];
        return $v;
    }
}