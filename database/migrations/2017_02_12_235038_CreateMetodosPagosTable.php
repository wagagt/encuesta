<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetodosPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metodos_pagos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paso_id')->unsigned();
            $table->string('nombre', 100)->nullable();
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
        Schema::table('metodos_pagos', function (Blueprint $table) {
            $table->dropForeign(['paso_id']);
        });

        Schema::drop('metodos_pagos');
    }
}