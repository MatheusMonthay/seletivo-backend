<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContasPagar extends Contas
{
    use HasFactory;
    protected $table = 'contas_pagar'; 
}