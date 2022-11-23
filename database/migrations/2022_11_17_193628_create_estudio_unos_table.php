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
        Schema::dropIfExists('estudio_uno');
        Schema::create('estudio_uno', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estudiante_id')->nullable(false);
            $table->string('estado_id', 2)->nullable(false);
            $table->string('municipio_id', 5)->nullable(false);
            $table->string('poblacion_id', 9)->nullable(false);
            $table->integer('exterior')->nullable(false);
            $table->string('interior', 6)->nullable(true);
            $table->integer('cp')->nullable(false);
            $table->string('telefono', 10)->nullable(true);
            $table->string('celular', 10)->nullable(true);
            $table->string('email')->nullable(false);
            $table->tinyInteger('beca')->nullable(false);
            $table->tinyInteger('beca_tipo')->nullable(true);
            $table->double('beca_cantidad')->nullable(true);
            $table->string('beca_insituto')->nullable(true);
            $table->tinyInteger('dependencia')->nullable(false);
            $table->tinyInteger('dependencia_parentesco')->nullable(true);
            $table->tinyInteger('residencia')->nullable(false);
            $table->tinyInteger('residencia_otro')->nullable(true);
            $table->tinyInteger('trabajo')->nullable(false);
            $table->string('trabajo_nombre')->nullable(true);
            $table->string('trabajo_puesto')->nullable(true);
            $table->string('trabajo_tiempo')->nullable(true);
            $table->string('trabajo_telefono')->nullable(true);
            $table->string('trabajo_domicilio')->nullable(true);
            $table->unsignedTinyInteger('status_cita_id')->nullable()->default(0);

            $table->foreign('estudiante_id')->references('id')->on('estudiantes')->onDelete('cascade');
            $table->foreign('estado_id')->references('cd_ent')->on('c_entidad')->onDelete('cascade');
            $table->foreign('municipio_id')->references('cve_mun_conca')->on('c_mun')->onDelete('cascade');
            $table->foreign('poblacion_id')->references('cve_loc_conca')->on('c_loc')->onDelete('cascade');
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
        Schema::dropIfExists('estudio_uno');
    }
};
