<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ClienteTest extends DuskTestCase
{
    use RefreshDatabase;

    public function testClienteCarro()
    {
        $this->browse(function (Browser $browser) {
            $browser
            ->visit('/customer')
            ->click('@servico')
            ->pause(2000)
            ->click('@carro')
            ->pause(4000)
            ->click('@compra')
            ->typeSlowly('email', 'marioferreira457845@gmail')
            ->click('@5')
            ->click('@carro')
            ->typeSlowly('quantidade', '4')
            ->click('@dinheiro')
            ->pause(2000)
            ->click('@submit')
            ->pause(4000)
            ->click('@agenda')
            ->typeSlowly('email', 'marioferreira457845@gmail')
            ->click('@pintu')
            ->click('@carro')
            ->keys('#dia',  '20171018')
            ->click('@submit')
            ->pause(3000);
        });
    }

    public function testClienteMoto()
    {
        $this->browse(function (Browser $browser) {
            $browser
            ->visit('/customer')
            ->click('@servico')
            ->pause(2000)
            ->click('@moto')
            ->pause(4000)
            ->click('@compra')
            ->typeSlowly('email', 'barrossilva8788@gmail')
            ->click('@6')
            ->click('@moto')
            ->typeSlowly('quantidade', '5')
            ->click('@cartao')
            ->pause(2000)
            ->click('@submit')
            ->pause(4000)
            ->click('@agenda')
            ->typeSlowly('email', 'barrossilva8788@gmail')
            ->click('@ilu')
            ->click('@moto')
            ->keys('#dia', '17052024')
            ->click('@submit')
            ->pause(3000);
        });
    }
}
