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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropIfExists('estudiantes');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
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
