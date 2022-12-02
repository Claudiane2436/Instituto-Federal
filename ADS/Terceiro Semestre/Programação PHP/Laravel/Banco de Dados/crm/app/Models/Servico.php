<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $table = 'servico';
    protected $fillable =['email', 'servico', 'categoria','dia' ];
}
