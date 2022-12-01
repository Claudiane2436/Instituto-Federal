<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $table = 'veiculo';
    protected $fillable =['cliente_id', 'tipo', 'marca', 'modelo', 'placa', 'ano'];
}
