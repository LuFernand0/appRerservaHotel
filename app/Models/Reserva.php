<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'idcliente',
        'idfuncionario',
        'idquarto',
        'situacao',
        'dataSaida'
    ];
}
