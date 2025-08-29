<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->integer('idPersona')->autoIncrement();
            $table->string('nombre');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->date('fechaNacimiento');
            $table->string('departamento');
            $table->string('distrito');
            $table->string('ciudad');
            $table->string('direccion');
            $table->boolean('genero');
            $table->string('telefono');
            $table->string('dni');
            $table->string('email');
            $table->string('cargo');
            $table->string('nEstudios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
