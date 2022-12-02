<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ListaTest extends DuskTestCase
{
    
    public function testListaFornecedor()
    {
        $this->browse(function (Browser $browser) {
            $browser
            ->visit('/aprese')
            ->assertSee('Sistema')
            ->pause(4000)
            ->click('@listagem')
            ->assertPathIs('/listagem')
            ->pause(3000)
            ->clickLink('Fornecedor')
            ->assertPathIs('/fornecedorLista')
            ->assertSee('Fornecedores')
            ->pause(3000);
        });
    }

    public function testListaCliente()
    {
        $this->browse(function (Browser $browser) {
            $browser
            ->visit('/aprese')
            ->pause(4000)
            ->click('@listagem')
            ->assertPathIs('/listagem')
            ->pause(3000)
            ->clickLink('Cliente')
            ->assertPathIs('/clienteLista')
            ->assertSee('Clientes')
            ->pause(3000);

        });
    }

    public function testListaVeiculo()
    {
        $this->browse(function (Browser $browser) {
            $browser
            ->visit('/aprese')
            ->pause(3000)
            ->click('@listagem')
            ->assertPathIs('/listagem')
            ->pause(3000)
            ->clickLink('Veículo')
            ->assertPathIs('/veiculoLista')
            ->assertSee('Veículos')
            ->pause(3000);

        });
    }

    public function testListaProduto()
    {
        $this->browse(function (Browser $browser) {
            $browser
            ->visit('/aprese')
            ->pause(4000)
            ->click('@listagem')
            ->assertPathIs('/listagem')
            ->pause(3000)
            ->clickLink('Produto')
            ->assertPathIs('/produtoLista')
            ->assertSee('Produtos')
            ->pause(4000);


        });
    }

    public function testListaVenda()
    {
        $this->browse(function (Browser $browser) {
            $browser
            ->visit('/aprese')
            ->pause(4000)
            ->clickLink('Vendas')
            ->assertPathIs('/vendaLista')
            ->pause(5000);

        });
    }

    public function testListaServico()
    {
        $this->browse(function (Browser $browser) {
            $browser
            ->visit('/aprese')
            ->pause(4000)
            ->clickLink('Serviços')
            ->assertPathIs('/servicoLista')
            ->pause(5000);

        });
    }
}
