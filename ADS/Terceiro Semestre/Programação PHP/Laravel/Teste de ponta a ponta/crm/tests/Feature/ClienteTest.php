<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Helpers\DataBuilders\ClienteDataBuilder;
use Illuminate\Support\Facades\Schema;
use App\Models\Cliente;
use App\Models\Veiculo;


class ClienteTest extends TestCase
{
    public function setUp(): void{
        
        parent::setUp();
        Veiculo::truncate();
        Schema::disableForeignKeyConstraints();
        Cliente::truncate();
        Schema::enableForeignKeyConstraints();

        $vdb = new ClienteDataBuilder();
        $v = $vdb->getData();

        Cliente::insert($v);
    }

    public function test_le_um_cliente(){
        $paulo = Cliente::find(1);
        $nome = $paulo['nome'];
        $this->assertEquals('Paulo', $nome);
    }

    public function test_le_todos_os_clientes(){
        $v = Cliente::all();
        $this->assertEquals(3, sizeof($v));
    }

    public function test_le_todos_cliente_corretamente(){
        $lista = Cliente::all();

        $this->assertEquals('de Souza', $lista[0]['snome']);
        $this->assertEquals('90450833', $lista[2]['telefone']);
        $this->assertEquals('147.246.411.58', $lista[1]['cpf']);
    }

    public function test_atualiza_cliente_corretamente(){
        $paula = Cliente::find(2);

        $this->assertEquals('Paula', $paula['nome']);


        $paula['nome']= 'Poliana';

        $paula->save();

        $pa = Cliente::find(2);

        $pa = $this->assertEquals('Poliana',  $paula['nome']);
    }

    public function test_remove_cliente_corretamente(){
        $isabela = Cliente::find(3);

        $isabela->delete();

        $isabela = Cliente::find(3);
        $this->assertNull($isabela);
    }

    public function test_cadastra_cliente(){
        $vdb = new ClienteDataBuilder();
        $row = $vdb->getRow();

        Cliente::create($row);

        $v = Cliente::all();
        $num = sizeof($v);
        $this->assertEquals(4, $num);

        $ven = $v[$num -1];
        $this ->assertEquals('João', $ven['nome']);

    }
}
