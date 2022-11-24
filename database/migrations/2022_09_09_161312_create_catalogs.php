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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Parentesco
        Schema::dropIfExists('c_parentescos');
        Schema::create('c_parentescos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable(false);
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Estudios
        Schema::dropIfExists('c_escolaridades');
        Schema::create('c_escolaridades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable(false);
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Status Estudiante
        Schema::dropIfExists('estatus_estudiante');
        Schema::create('estatus_estudiante', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable(false);
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Carrera
        Schema::dropIfExists('carreras');
        Schema::create('carreras', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable(false);
            $table->unsignedBigInteger('plan_estudio_id')->nullable(false);
            $table->integer('ciclos')->nullable(false);
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Plan de estudio
        Schema::dropIfExists('plan_estudios');
        Schema::create('plan_estudios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable(false);
            $table->string('modalidad')->nullable(false);
            $table->double('costo')->nullable(false);
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Familiar gastos
        Schema::dropIfExists('familiar_gastos');
        Schema::create('familiar_gastos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estudiante_id')->nullable(false);
            $table->string('familiar_nombre')->nullable(false);
            $table->integer('familiar_edad')->nullable(false);
            $table->unsignedBigInteger('familiar_parentesco')->nullable(false);
            $table->integer('familiar_estudios')->nullable(false);
            $table->timestamps();

            // $table->foreign('estudiante_id')->references('id')->on('estudiantes');
            $table->foreign('familiar_parentesco')->references('id')->on('c_parentescos');
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Familiar casa
        Schema::dropIfExists('familiar_casa');
        Schema::create('familiar_casa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estudiante_id')->nullable(false);
            $table->string('casa_nombre')->nullable(false);
            $table->integer('casa_edad')->nullable(false);
            $table->unsignedBigInteger('casa_parentesco')->nullable(false);
            $table->integer('casa_estudios')->nullable(false);
            $table->timestamps();

            // $table->foreign('estudiante_id')->references('id')->on('estudiantes');
            $table->foreign('casa_parentesco')->references('id')->on('c_parentescos');
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Familiar instituto
        Schema::dropIfExists('familiar_insituto');
        Schema::create('familiar_insituto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estudiante_id')->nullable(false);
            $table->string('instituto_familiar')->nullable(false);
            $table->unsignedBigInteger('instituto_nivel')->nullable(false);
            $table->string('instituto_nombre')->nullable(false);
            $table->timestamps();

            // $table->foreign('estudiante_id')->references('id')->on('estudiantes');
            $table->foreign('instituto_nivel')->references('id')->on('c_escolaridades');
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // Familiar automovil
        Schema::dropIfExists('familiar_automovil');
        Schema::create('familiar_automovil', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estudiante_id')->nullable(false);
            $table->string('auto_marca')->nullable(false);
            $table->integer('auto_modelo')->nullable(false);
            $table->double('auto_valor')->nullable(false);
            $table->double('auto_cantidad')->nullable(false);
            $table->integer('auto_plazos')->nullable(false);
            $table->double('auto_pago')->nullable(false);
            $table->timestamps();

            // $table->foreign('estudiante_id')->references('id')->on('estudiantes');
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
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
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropIfExists('c_entidad');
        Schema::create('c_entidad', function (Blueprint $table) {
            $table->string('cd_ent', 2)->unique()->index();
            $table->string('nb_entidad', 255)->nullable(false);
            $table->string('cd_ent_renapo', 10)->nullable(false);
            $table->string('nb_ent', 10)->nullable(false);
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropIfExists('c_mun');
        Schema::create('c_mun', function (Blueprint $table) {
            $table->string('cve_mun_conca', 5)->unique()->index();
            $table->string('nom_mun', 255)->nullable(false);
            $table->string('cve_ent', 2)->nullable(false);

            $table->foreign('cve_ent')->references('cd_ent')->on('c_entidad')->onDelete('cascade');
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropIfExists('c_loc');
        Schema::create('c_loc', function (Blueprint $table) {
            $table->string('cve_loc_conca', 9)->unique()->index();
            $table->string('nom_loc', 255)->nullable(false);
            $table->string('ambito', 1)->nullable(false);
            $table->float('latitud', 12, 3)->nullable(false);
            $table->float('longitud', 12, 3)->nullable(false);
            $table->string('cve_mun_conca', 5);

            $table->foreign('cve_mun_conca')->references('cve_mun_conca')->on('c_mun')->onDelete('cascade');
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::dropIfExists('c_colonias');
        Schema::create('c_colonias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('d_codigo', 255)->nullable(true);
            $table->string('d_asenta', 255)->nullable(true);
            $table->string('d_tipo_asenta', 255)->nullable(true);
            $table->string('D_mnpio', 255)->nullable(true);
            $table->string('d_estado', 255)->nullable(true);
            $table->string('d_ciudad', 255)->nullable(true);
            $table->string('d_CP', 255)->nullable(true);
            $table->string('c_estado', 255)->nullable(true);
            $table->string('c_oficina', 255)->nullable(true);
            $table->string('c_CP', 255)->nullable(true);
            $table->string('c_mnpio', 255)->nullable(true);
            $table->string('id_asenta_cpcons', 255)->nullable(true);
            $table->string('d_zona', 255)->nullable(true);
            $table->string('c_cve_ciudad', 255)->nullable(true);
        });

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
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
