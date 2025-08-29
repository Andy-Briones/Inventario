<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    protected $table = 'biens';

    // Clave primaria personalizada
    protected $primaryKey = 'idBien';

    // Tipo de clave primaria
    protected $keyType = 'int';

    // Es autoincremental
    public $incrementing = true;

    // Usar created_at y updated_at
    public $timestamps = true;
}
