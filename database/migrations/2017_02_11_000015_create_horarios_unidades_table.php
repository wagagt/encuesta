<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios_unidades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('unidade_id')->unsigned();
            $table->string('dia', 45)->nullable();
            $table->string('entrada', 45)->nullable();
            $table->string('salida', 45)->nullable();
            $table->string('medio_dia_cierra', 45)->nullable();
            $table->string('medio_dia_abre', 45)->nullable();
            $table->mediumText('notas')->nullable();
            $table->timestamps();

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
        Schema::table('horarios_unidades', function (Blueprint $table) {
            $table->dropForeign(['unidade_id']);
        });

        Schema::drop('horarios_unidades');
    }
}
