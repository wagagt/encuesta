<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaUnidadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_unidade', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('area_id')->unsigned();
            $table->integer('unidade_id')->unsigned();
            $table->timestamps();

            $table->foreign('area_id')->references('id')->on('unidades')->onDelete('no action')->onUpdate('no action');
            $table->foreign('unidade_id')->references('id')->on('areas')->onDelete('no action')->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('area_unidade', function (Blueprint $table) {
            $table->dropForeign(['area_id']);
            $table->dropForeign(['unidade_id']);
        });

        Schema::drop('area_unidade');
    }
}