<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        // Parentesco
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropIfExists('c_parentescos');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Schema::create('c_parentescos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable(false);
        });

        // Estudios
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropIfExists('c_niveles_academicos');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Schema::create('c_niveles_academicos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable(false);
        });

        // Status Estudiante
        Schema::dropIfExists('estatus_estudiante');
        Schema::create('estatus_estudiante', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable(false);
        });

        // Carrera
        Schema::dropIfExists('carreras');
        Schema::create('carreras', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable(false);
            $table->unsignedBigInteger('plan_estudio_id')->nullable(false);
            $table->integer('ciclos')->nullable(false);
        });

        // Plan de estudio
        Schema::dropIfExists('plan_estudios');
        Schema::create('plan_estudios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable(false);
            $table->string('modalidad')->nullable(false);
            $table->double('costo')->nullable(false);
        });

        // Familiar gastos
        Schema::dropIfExists('familiar_gastos');
        Schema::create('familiar_gastos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estudiante_id')->nullable(false);
            $table->string('familiar_nombre')->nullable(false);
            $table->integer('familiar_edad')->nullable(false);
            $table->unsignedBigInteger('familair_parentesco')->nullable(false);
            $table->integer('familiar_estudios')->nullable(false);

            // $table->foreign('estudiante_id')->references('id')->on('estudiantes');
            $table->foreign('familair_parentesco')->references('id')->on('c_parentescos');
        });

        // Familiar casa
        Schema::dropIfExists('familiar_casa');
        Schema::create('familiar_casa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estudiante_id')->nullable(false);
            $table->string('casa_nombre')->nullable(false);
            $table->integer('casa_edad')->nullable(false);
            $table->unsignedBigInteger('casa_parentesco')->nullable(false);
            $table->integer('casa_estudios')->nullable(false);

            // $table->foreign('estudiante_id')->references('id')->on('estudiantes');
            $table->foreign('casa_parentesco')->references('id')->on('c_parentescos');
        });

        // Familiar instituto
        Schema::dropIfExists('familiar_insituto');
        Schema::create('familiar_insituto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estudiante_id')->nullable(false);
            $table->string('instituto_familiar')->nullable(false);
            $table->unsignedBigInteger('instituto_nivel')->nullable(false);
            $table->string('instituto_nombre')->nullable(false);

            // $table->foreign('estudiante_id')->references('id')->on('estudiantes');
            $table->foreign('instituto_nivel')->references('id')->on('c_niveles_academicos');
        });

        // Familiar automovil
        Schema::dropIfExists('familiar_automovil');
        Schema::create('familiar_automovil', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estudiante_id')->nullable(false);
            $table->string('auto_marca')->nullable(false);
            $table->integer('auto_modelo')->nullable(false);
            $table->double('auto_cantidad')->nullable(false);
            $table->integer('auto_plazos')->nullable(false);
            $table->double('auto_pago')->nullable(false);

            // $table->foreign('estudiante_id')->references('id')->on('estudiantes');
        });

        // Historicos
        Schema::dropIfExists('historicos');
        Schema::create('historicos', function (Blueprint $table) {
            $table->id();
            $table->string('matricula_estudiante', 10)->nullable(false);
            $table->string('ciclo', 5)->nullable(false);
            $table->tinyInteger('tipo_beca')->nullable(false);
            $table->double('promedio')->nullable(false);
            $table->double('promedio_anterior')->nullable(false);
            $table->tinyInteger('semestre')->nullable(false);
            $table->tinyInteger('porcentaje')->nullable(false);

            $table->timestamps();

            // $table->foreign('matricula_estudiante')->references('matricula')->on('estudiantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropIfExists('c_parentescos');
        Schema::dropIfExists('c_niveles_academicos');
        Schema::dropIfExists('estatus_estudiante');
        Schema::dropIfExists('carreras');
        Schema::dropIfExists('plan_estudios');
        Schema::dropIfExists('familiar_gastos');
        Schema::dropIfExists('familiar_casa');
        Schema::dropIfExists('familiar_automovil');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
};
