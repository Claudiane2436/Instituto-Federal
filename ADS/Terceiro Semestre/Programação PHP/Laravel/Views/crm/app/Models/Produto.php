<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto';
    protected $fillable =['fornecedor_id', 'nome', 'categoria', 'estoque', 'preco'];
}
