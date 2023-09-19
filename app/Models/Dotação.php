<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dotação extends Model
{
    use HasFactory;

    protected $fillable = [

        'Nome',
        'Tipo',
        'Subcategoria',
        'Ano_vigencia',
        'Valor_total',
        'Data_inicio',
        'Empresa_prestadora',
        
    ];
}
