<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produto;
use App\Helpers\DataBuilders\ProdutoDataBuilder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pdb = new ProdutoDataBuilder();
        $v = $pdb->getData();
        Produto::insert($v);
    }
}
