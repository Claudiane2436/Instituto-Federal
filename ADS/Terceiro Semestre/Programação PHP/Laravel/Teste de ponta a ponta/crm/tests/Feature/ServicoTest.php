<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Helpers\DataBuilders\ServicoDataBuilder;
use App\Models\Servico;

class ServicoTest extends TestCase
{
    public function setUp(): void{
        parent::setUp();

        Servico::truncate();

        $vdb = new ServicoDataBuilder();
        $v = $vdb->getData();

        Servico::insert($v);
    }

    public function test_le_um_servico(){
        $larson = Servico::find(1);
        $email = $larson['email'];
        $this->assertEquals('larson.dovie@example.com', $email);
    }

    public function test_le_todos_os_servicos(){
        $v = Servico::all();
        $this->assertEquals(3, sizeof($v));
    }

    public function test_le_todos_servicos_corretamente(){
        $lista = Servico::all();

        $this->assertEquals('Luz de LED', $lista[0]['servico']);
        $this->assertEquals('2022-05-17', $lista[2]['dia']);
        $this->assertEquals('ipredovic@example.net', $lista[1]['email']);
    }

    public function test_atualiza_servico_corretamente(){
        $larson = Servico::find(1);

        $this->assertEquals('larson.dovie@example.com', $larson['email']);


        $larson['email']= 'larson178@gmail.com';

        $larson->save();

        $lar = Servico::find(1);

        $lar = $this->assertEquals('larson178@gmail.com',  $larson['email']);
    }
    

    public function test_remove_servico_corretamente(){
        $ipredovic = Servico::find(2);

        $ipredovic->delete();

        $ipredovic = Servico::find(2);
        $this->assertNull($ipredovic);
    }

    public function test_cadastra_servico(){
        $vdb = new ServicoDataBuilder();
        $row = $vdb->getRow();

        Servico::create($row);

        $v = Servico::all();
        $num = sizeof($v);
        $this->assertEquals(4, $num);

        $ven = $v[$num -1];
        $this ->assertEquals('luciano@example.com', $ven['email']);

    }
}
