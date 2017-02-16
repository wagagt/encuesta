<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resultados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_resultado_id')->unsigned();
            $table->integer('paso_id')->unsigned();
            $table->string('nombre', 100)->nullable();
            $table->timestamps();

            $table->foreign('paso_id')->references('id')->on('pasos')->onDelete('no action')->onUpdate('no action');
            $table->foreign('tipo_resultado_id')->references('id')->on('tipo_resultados')->onDelete('no action')->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resultados', function (Blueprint $table) {
            $table->dropForeign(['paso_id']);
            $table->dropForeign(['tipo_resultado_id']);
        });

        Schema::drop('resultados');
    }
}