<?php


namespace App\Libraries\Components;


class Table{

    private $header;
    private $body;

    function __construct(array $header, array $body){
        $this->header = $header;
        $this->body = $body;
    }

    public function getHTML(){
        $html ='<table class="table">';
        $html .= $this->tableHeader();
        $html .= $this->tableBody();
        $html .= '</table>';
        return $html;
    }
    
    private function tableHeader(){
        $html= '<thead> <tr>';
                        
        foreach ($this->header as $item){
            $html .="<th scope\"col\">$item</th>";
        }

        $html .= '</tr></thead>';
                
            return $html;
      }

      private function tableBody(){
        $html = '<tbody>';
        foreach($this->body as $row){
            $html .= $this->tableRow($row);
        }
       
        $html .= '</tbody>';
        return $html;
      }

      private function tableRow($row){
        $html =  '<tr>';

        foreach($row as $item){
           $html .= "<td>$item</td>";
        }

        $html .='</tr>';
        return $html;
    }

    

    
}