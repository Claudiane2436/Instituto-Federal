<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Helpers\DataBuilders\FornecedorDataBuilder;
use Illuminate\Support\Facades\Schema;
use App\Models\Fornecedor;
use App\Models\Produto;

class FornecedorTest extends TestCase
{
    public function setUp(): void{
        
        parent::setUp();
        Produto::truncate();
        Schema::disableForeignKeyConstraints();
        Fornecedor::truncate();
        Schema::enableForeignKeyConstraints();

        $vdb = new FornecedorDataBuilder();
        $v = $vdb->getData();

        Fornecedor::insert($v);
    }

    public function test_le_um_fornecedor(){
        $monique = Fornecedor::find(3);
        $nome = $monique['nome'];
        $this->assertEquals('Monique Alvez', $nome);
    }

    public function test_le_todos_os_fornecedores(){
        $v = Fornecedor::all();
        $this->assertEquals(5, sizeof($v));
    }
    public function test_le_todos_fornecedores_corretamente(){
        $lista = Fornecedor::all();

        $this->assertEquals('Luiz da Paz', $lista[0]['nome']);
        $this->assertEquals('98755713', $lista[1]['telefone']);
        $this->assertEquals('Monique Alvez', $lista[2]['nome']);
        $this->assertEquals('97725313', $lista[3]['telefone']);
        $this->assertEquals('Ives de Lima', $lista[4]['nome']);
    }

    public function test_atualiza_fornecedor_corretamente(){
        $anton = Fornecedor::find(4);

        $this->assertEquals('Anton Perreira', $anton['nome']);

        $anton['nome']= 'Anton';
        $anton->save();
        $an = Fornecedor::find(4);
        $ant = $this->assertEquals('Anton',  $anton['nome']);
    }

    public function test_remove_fornecedor_corretamente(){
        $luiz = Fornecedor::find(1);

        $luiz->delete();

        $luiz = Fornecedor::find(1);
        $this->assertNull($luiz);
    }

    public function test_cadastra_fornecedor(){
        $vdb = new FornecedorDataBuilder();
        $row = $vdb->getRow();

        Fornecedor::create($row);

        $v = Fornecedor::all();
        $num = sizeof($v);
        $this->assertEquals(6, $num);

        $ven = $v[$num -1];
        $this ->assertEquals('998435313', $ven['telefone']);

    }
}
