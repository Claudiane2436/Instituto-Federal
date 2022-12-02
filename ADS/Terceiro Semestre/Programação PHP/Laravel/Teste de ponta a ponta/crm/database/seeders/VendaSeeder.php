<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Venda;
use App\Helpers\DataBuilders\VendaDataBuilder;

class VendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pdb = new VendaDataBuilder();
        $v = $pdb->getData();
        Venda::insert($v);
    }
}
