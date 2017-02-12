<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePuestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puestos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('unidade_id')->unsigned();           
            $table->string('nombre', 100)->nullable();
            $table->integer('cantidad_personas')->nullable();
            $table->string('jefe_inmediato', 100)->nullable();
            $table->string('reporta_a', 100)->nullable();
            $table->mediumText('objetivo')->nullable();
            $table->string('supervisa_a', 100)->nullable();

            $table->foreign('unidade_id')->references('id')->on('unidades')->onDelete('no action')->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('puestos', function (Blueprint $table) {
            $table->dropForeign(['unidade_id']);
        });

        Schema::drop('puestos');
    }
}