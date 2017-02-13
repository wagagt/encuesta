<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagenesResultadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagenes_resultados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('resultado_id')->unsigned();
            $table->string('descripcion', 100)->nullable();
            $table->string('imagen_ubicacion', 100)->nullable();
            $table->timestamps();

            $table->foreign('resultado_id')->references('id')->on('resultados')->onDelete('no action')->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('imagenes_resultados', function (Blueprint $table) {
            $table->dropForeign(['resultado_id']);
        });

        Schema::drop('imagenes_resultados');
    }
}
