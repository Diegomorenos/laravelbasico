<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'paises';

    protected $fillable = [
        'id',
        'codigo_pais',
        'nombre'
    ];
}
