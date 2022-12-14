<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = 'venda';
    protected $fillable =['email', 'produto', 'categoria', 'quantidade','quantidade', 'pagamento'];
}
