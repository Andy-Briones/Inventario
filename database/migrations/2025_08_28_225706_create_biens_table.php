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
        Schema::create('biens', function (Blueprint $table) {
            $table->integer('idBien')->autoIncrement();
            $table->string('nombreBien');
            $table->string('codigoP');
            $table->string('marca');
            $table->string('modelo');
            $table->string('color');
            $table->string('serie');
            $table->string('descripcion');
            $table->string('conservacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biens');
    }
};
