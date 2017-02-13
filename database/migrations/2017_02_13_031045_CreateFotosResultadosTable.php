<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotosResultadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotos_resultados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('resultado_id')->unsigned();
            $table->string('descripcion', 100)->nullable();
            $table->string('especifique', 100)->nullable();
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
        Schema::table('fotos_resultados', function (Blueprint $table) {
            $table->dropForeign(['resultado_id']);
        });

        Schema::drop('fotos_resultados');
    }
}
