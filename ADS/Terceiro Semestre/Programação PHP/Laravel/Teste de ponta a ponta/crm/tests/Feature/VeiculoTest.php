<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Helpers\DataBuilders\VeiculoDataBuilder;
use App\Models\Veiculo;

class VeiculoTest extends TestCase
{
    public function setUp(): void{
        parent::setUp();

        Veiculo::truncate();

        $vdb = new VeiculoDataBuilder();
        $v = $vdb->getData();

        Veiculo::insert($v);
    }

    public function test_le_um_veiculo(){
        $audi = Veiculo::find(1);
        $marca = $audi['marca'];
        $this->assertEquals('Audi', $marca);
    }

    public function test_le_todos_os_veiculos(){
        $v = Veiculo::all();
        $this->assertEquals(3, sizeof($v));
    }

    public function test_le_todos_veiculos_corretamente(){
        $lista = Veiculo::all();

        $this->assertEquals('FRD8745', $lista[0]['placa']);
        $this->assertEquals('Coupé 2+2', $lista[2]['modelo']);
        $this->assertEquals('2017', $lista[1]['ano']);
    }

    public function test_atualiza_veiculo_corretamente(){
        $placa = Veiculo::find(2);

        $this->assertEquals('CLO8745', $placa['placa']);


        $placa['placa']= 'CIA5745';

        $placa->save();

        $pla = Veiculo::find(2);

        $pla = $this->assertEquals('CIA5745',  $placa['placa']);
    }

    
    public function test_remove_veiculo_corretamente(){
        $alpine = Veiculo::find(3);

        $alpine->delete();

        $alpine = Veiculo::find(3);
        $this->assertNull($alpine);
    }

    public function test_cadastra_veiculo(){
        $vdb = new VeiculoDataBuilder();
        $row = $vdb->getRow();

        Veiculo::create($row);

        $v = Veiculo::all();
        $num = sizeof($v);
        $this->assertEquals(4, $num);

        $ven = $v[$num -1];
        $this ->assertEquals('Kawasaki', $ven['marca']);

    }
}
