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
        Schema::create('estudio_tres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estudiante_id');
            $table->integer('hermanos')->nullable(false);
            $table->integer('hermanos_residen')->nullable(false);
            $table->integer('dependencia')->nullable(false);
            $table->integer('seguro')->nullable(false);
            $table->string('seguro_especifique')->nullable(true);
            $table->integer('familia_trabajo')->nullable(false);
            $table->integer('familia_aporte')->nullable(false);
            $table->double('ingreso_propio', 10, 2)->nullable(false);
            $table->double('ingreso_padre', 10, 2)->nullable(false);
            $table->double('ingreso_conyuge', 10, 2)->nullable(false);
            $table->double('ingreso_hermanos', 10, 2)->nullable(false);
            $table->double('ingreso_madre', 10, 2)->nullable(false);
            $table->double('ingreso_otro', 10, 2)->nullable(false);
            $table->double('gasto_total', 10, 2)->nullable(false);
            $table->double('foraneo_total', 10, 2)->nullable(false);
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
        Schema::dropIfExists('estudio_tres');
    }
};
