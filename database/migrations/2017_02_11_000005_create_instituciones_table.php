<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 500);
            $table->string('sitio_web', 500)->nullable();
            $table->string('direccion', 500)->nullable();
            $table->string('telefonos', 50)->nullable();
            $table->mediumText('pregunta_final')->nullable();
            $table->integer('estado_avance')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('instituciones');
    }
}