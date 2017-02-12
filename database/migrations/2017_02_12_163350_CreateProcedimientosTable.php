<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcedimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('servicio_id')->unsigned();
            $table->string('descripcion', 45)->nullable();
            $table->timestamps();

            $table->foreign('servicio_id')->references('id')->on('servicios')->onDelete('no action')->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('procedimientos', function (Blueprint $table) {
            $table->dropForeign(['servicio_id']);
        });

        Schema::drop('procedimientos');
    }
}