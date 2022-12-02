<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
use App\Helpers\DataBuilders\FornecedorDataBuilder;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        $pdb = new FornecedorDataBuilder();
        $v = $pdb->getData();
        Fornecedor::insert($v);
    }
}
