<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class saldos extends Model
{
    use HasFactory;

    protected $fillable = [
        'SaldoTotal',
        'SaldoDisponivel',
        'SaldoUtilizado',
        'SaldoTramitação',
        'SaldoReserva', 
    ];
}
