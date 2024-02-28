<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expediente extends Model
{
    use HasFactory;
    protected $fillable = [
        'año',
        'detalles',
        'demandante',
        'demandado'
        , // Agrega el campo 'demandante' a la lista
    ];

    protected $table = "expediente";
}
