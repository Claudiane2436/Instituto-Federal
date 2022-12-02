<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Helpers\DataBuilders\VendaDataBuilder;
use App\Models\Venda;

class VendaTest extends TestCase
{
    public function setUp(): void{
        parent::setUp();

        Venda::truncate();

        $vdb = new VendaDataBuilder();
        $v = $vdb->getData();

        Venda::insert($v);
    }

    public function test_le_uma_venda(){
        $wilkinson = Venda::find(1);
        $email = $wilkinson['email'];
        $this->assertEquals('wilkinson.willa@example.com', $email);
    }

    public function test_le_todas_as_vendas(){
        $v = Venda::all();
        $this->assertEquals(3, sizeof($v));
    }

    public function test_le_todas_vendas_corretamente(){
        $lista = Venda::all();

        $this->assertEquals('Distribuidor', $lista[0]['produto']);
        $this->assertEquals('mariana4785@example.com', $lista[2]['email']);
        $this->assertEquals('3', $lista[1]['quantidade']);
    }

    public function test_atualiza_venda_corretamente(){
        $wilkinson = Venda::find(1);

        $this->assertEquals('wilkinson.willa@example.com', $wilkinson['email']);


        $wilkinson['email']= 'wilkinson15478@gmail.com';

        $wilkinson->save();

        $wil = Venda::find(1);

        $wil = $this->assertEquals('wilkinson15478@gmail.com',  $wilkinson['email']);
    }

    public function test_remove_venda_corretamente(){
        $tremblay = Venda::find(2);

        $tremblay->delete();

        $tremblay = Venda::find(2);
        $this->assertNull($tremblay);
    }

    public function test_cadastra_venda(){
        $vdb = new VendaDataBuilder();
        $row = $vdb->getRow();

        Venda::create($row);

        $v = Venda::all();
        $num = sizeof($v);
        $this->assertEquals(4, $num);

        $ven = $v[$num -1];
        $this ->assertEquals('juliana4785@example.com', $ven['email']);

    }
}
