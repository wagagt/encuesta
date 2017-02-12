<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiposPresenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_presencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paso_id')->unsigned();
            $table->string('descripcion', 100)->nullable();
            $table->string('tipo', 100)->nullable();
            $table->integer('minimo')->nullable();
            $table->integer('maximo')->nullable();
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
        Schema::drop('tipos_presencias');
    }
}