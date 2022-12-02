<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class CrudTest extends DuskTestCase
{
    use RefreshDatabase;

    public function testCadastroFornecedor()
    {
        $this->browse(function (Browser $browser) {
            $browser
            ->visit('/aprese')
            ->assertSee('Sistema')
            ->pause(2000)
            ->click('@cadastro')
            ->assertPathIs('/cadastro')
            ->pause(3000)
            ->clickLink('Fornecedor')
            ->assertPathIs('/cadastroFornecedor')
            ->assertSee('Cadastrar')
            ->pause(3000)
            ->type('nome', 'Maria de Souza')
            ->typeSlowly('telefone', '94485574')
            ->click('@submit')
            ->pause(4000);

        });
    }

    public function testCadastroCliente()
    {
        $this->browse(function (Browser $browser) {
            $browser
            ->visit('/aprese')
            ->assertSee('Sistema')
            ->pause(2000)
            ->click('@cadastro')
            ->assertPathIs('/cadastro')
            ->pause(3000)
            ->clickLink('Cliente')
            ->assertPathIs('/cadastroCliente')
            ->assertSee('Cadastrar')
            ->pause(3000)
            ->type('nome', 'Juliana ')
            ->type('snome', 'Ferreira Paixão')
            ->typeSlowly('email', 'paixao5748@gmail.com')
            ->typeSlowly('cpf', '98778454544')
            ->click('@femi')
            ->type('telefone', '94484577')
            ->click('@submit')
            ->pause(4000);

        });
    }
    
    public function testCadastroVeiculo()
    {
        $this->browse(function (Browser $browser) {
            $browser
            ->visit('/aprese')
            ->assertSee('Sistema')
            ->pause(3000)
            ->click('@cadastro')
            ->assertPathIs('/cadastro')
            ->pause(3000)
            ->clickLink('Veículo')
            ->assertPathIs('/cadastroVeiculo')
            ->assertSee('Cadastrar')
            ->pause(3000)
            ->type('cliente_id', '1')
            ->click('@carro')
            ->typeSlowly('marca', 'Abarth')
            ->typeSlowly('modelo', 'Abarth 300')
            ->type('placa','FAO7765')
            ->type('ano', '2021')
            ->click('@submit')
            ->pause(4000);

        });
    }

    public function testCadastroProduto()
    {
        $this->browse(function (Browser $browser) {
            $browser
            ->visit('/aprese')
            ->assertSee('Sistema')
            ->pause(2000)
            ->click('@cadastro')
            ->assertPathIs('/cadastro')
            ->pause(3000)
            ->clickLink('Produto')
            ->assertPathIs('/cadastroProduto')
            ->assertSee('Cadastrar')
            ->pause(3000)
            ->type('fornecedor_id', '1')
            ->type('nome', 'Luz Interna Led')
            ->click('@carro')
            ->typeSlowly('estoque', '5')
            ->typeSlowly('preco', '25')
            ->click('@submit')
            ->pause(5000);

        });
    }
    
    
   
}
