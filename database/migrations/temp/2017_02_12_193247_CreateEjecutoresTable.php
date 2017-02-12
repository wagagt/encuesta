<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEjecutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejecutores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paso_id')->unsigned();
            $table->string('nombre', 100)->nullable();
            $table->string('puesto', 100)->nullable();
            $table->string('recibe_del_paso', 100)->nullable();
            $table->string('entrega_al_paso', 100)->nullable();
            $table->timestamps();

            $table->foreign('paso_id')->references('id')->on('pasos')->onDelete('no action')->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ejecutores', function (Blueprint $table) {
            $table->dropForeign(['paso_id']);
        });

        Schema::drop('ejecutores');
    }
}