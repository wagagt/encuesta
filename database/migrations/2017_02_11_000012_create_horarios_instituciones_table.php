<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosInstitucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios_instituciones', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('institucione_id')->unsigned();
            $table->string('dia', 45)->nullable();
            $table->string('entrada', 45)->nullable();
            $table->string('salida', 45)->nullable();
            $table->string('medio_dia_cierra', 45)->nullable();
            $table->string('medio_dia_abre', 45)->nullable();
            $table->mediumText('notas')->nullable();

            $table->foreign('institucione_id')->references('id')->on('instituciones')->onDelete('no action')->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('horarios_instituciones', function (Blueprint $table) {
            $table->dropForeign(['institucione_id']);
        });

        Schema::drop('horarios_instituciones');
    }
}