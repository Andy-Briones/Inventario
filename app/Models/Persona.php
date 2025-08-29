<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';

    // Clave primaria personalizada
    protected $primaryKey = 'idPersona';

    // Tipo de clave primaria
    protected $keyType = 'int';

    // Es autoincremental
    public $incrementing = true;

    // Usar created_at y updated_at
    public $timestamps = true;
    public function user()
    {
        return $this->hasOne(User::class, 'persona_idPersona', 'idPersona');
    }

}
