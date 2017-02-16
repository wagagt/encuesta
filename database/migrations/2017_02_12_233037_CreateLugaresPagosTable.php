<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLugaresPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lugares_pagos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paso_id')->unsigned();
            $table->string('nombre', 45)->nullable();
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
        Schema::table('lugares_pagos', function (Blueprint $table) {
            $table->dropForeign(['paso_id']);
        });

        Schema::drop('lugares_pagos');
    }
}
