<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Servico;
use App\Helpers\DataBuilders\ServicoDataBuilder;

class ServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pdb = new ServicoDataBuilder();
        $v = $pdb->getData();
        Servico::insert($v);
    }
}
