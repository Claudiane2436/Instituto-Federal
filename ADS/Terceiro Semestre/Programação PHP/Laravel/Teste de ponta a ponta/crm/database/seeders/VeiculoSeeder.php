<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Veiculo;
use App\Helpers\DataBuilders\VeiculoDataBuilder;

class VeiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pdb = new VeiculoDataBuilder();
        $v = $pdb->getData();
        Veiculo::insert($v);
    }
}
