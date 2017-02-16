<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequisitosPuestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisitos_puestos', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('requerido', ['requerido','opcional','deseable'])->nullable();
            $table->enum('tipo', ['edad','formacion_academica'])->nullable();
            $table->mediumText('enunciado')->nullable();
            $table->mediumText('rango_respuestas')->nullable();
            $table->mediumText('respuesta')->nullable();
            $table->mediumText('notas')->nullable();
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
        Schema::drop('requisitos_puestos');
    }
}
