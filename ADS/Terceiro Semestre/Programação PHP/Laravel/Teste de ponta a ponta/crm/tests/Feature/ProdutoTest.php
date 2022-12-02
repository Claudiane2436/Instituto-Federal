<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Helpers\DataBuilders\ProdutoDataBuilder;
use App\Models\Produto;

class ProdutoTest extends TestCase
{
    public function setUp(): void{
        parent::setUp();

        Produto::truncate();

        $vdb = new ProdutoDataBuilder();
        $v = $vdb->getData();

        Produto::insert($v);
    }

    public function test_le_um_produto(){
        $distribuidor = Produto::find(1);
        $nome = $distribuidor['nome'];
        $this->assertEquals('Distribuidor', $nome);
    }

    public function test_le_todos_os_produtos(){
        $v = Produto::all();
        $this->assertEquals(3, sizeof($v));
    }

    public function test_le_todos_produtos_corretamente(){
        $lista = Produto::all();

        $this->assertEquals('Carro', $lista[0]['categoria']);
        $this->assertEquals('600', $lista[2]['preco']);
        $this->assertEquals('Tinta', $lista[1]['nome']);
    }

    public function test_atualiza_servico_corretamente(){
        $tinta = Produto::find(2);

        $this->assertEquals('25.40', $tinta['preco']);


        $tinta['preco']= '30.50';

        $tinta->save();

        $ti = Produto::find(2);

        $ti = $this->assertEquals('30.50',  $tinta['preco']);
    }

    public function test_remove_produto_corretamente(){
        $motor = Produto::find(3);

        $motor->delete();

        $motor = Produto::find(3);
        $this->assertNull($motor);
    }

    public function test_cadastra_servico(){
        $vdb = new ProdutoDataBuilder();
        $row = $vdb->getRow();

        Produto::create($row);

        $v = Produto::all();
        $num = sizeof($v);
        $this->assertEquals(4, $num);

        $ven = $v[$num -1];
        $this ->assertEquals('Filtro de Ar', $ven['nome']);

    }
}
