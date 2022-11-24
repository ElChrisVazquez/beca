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
        Schema::create('estudio_dos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estudiante_id')->nullable(false);
            $table->tinyInteger('padres')->nullable(false);
            $table->integer('padres_edad_padre')->nullable(false);
            $table->integer('padres_edad_madre')->nullable(false);
            $table->tinyInteger('padres_juntos')->nullable(false);
            $table->tinyInteger('padres_civil')->nullable(false);
            $table->tinyInteger('padres_padre_escolaridad')->nullable(false);
            $table->tinyInteger('padres_madre_escolaridad')->nullable(false);
            $table->string('padre_nombre')->nullable(false);
            $table->string('padre_trabajo')->nullable(true);
            $table->string('padre_cargo')->nullable(true);
            $table->string('padre_tiempo')->nullable(true);
            $table->string('padre_domicilio')->nullable(true);
            $table->string('padre_telefono')->nullable(true);
            $table->string('madre_nombre')->nullable(false);
            $table->string('madre_trabajo')->nullable(true);
            $table->string('madre_cargo')->nullable(true);
            $table->string('madre_tiempo')->nullable(true);
            $table->string('madre_domicilio')->nullable(true);
            $table->string('madre_telefono')->nullable(true);
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
        Schema::dropIfExists('estudio_dos');
    }
};
