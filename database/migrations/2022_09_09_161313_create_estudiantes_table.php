<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('matricula', 10)->unique();
            $table->string('paterno');
            $table->string('materno');
            $table->string('nombre');
            $table->date('fecha_nacimiento');
            $table->unsignedTinyInteger('estatus_estudiante_id');
            $table->unsignedTinyInteger('carrera_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
};
