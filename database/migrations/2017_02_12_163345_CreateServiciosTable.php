<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 100)->nullable();
            $table->integer('unidade_id')->unsigned();
            $table->integer('bases_legale_id')->unsigned();
            $table->string('otra_base_legal', 100)->nullable();
            $table->integer('clasificacione_id')->unsigned();
            $table->string('otra_clasificacion', 100)->nullable();
            $table->string('descripcion', 100)->nullable();
            $table->string('expone_muestra', 100)->nullable();
            $table->integer('cantidad_procedimientos')->nullable();
            $table->timestamps();

            $table->foreign('unidade_id')->references('id')->on('unidades')->onDelete('no action')->onUpdate('no action');
            $table->foreign('bases_legale_id')->references('id')->on('bases_legales')->onDelete('no action')->onUpdate('no action');
            $table->foreign('clasificacione_id')->references('id')->on('clasificaciones')->onDelete('no action')->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('servicios', function (Blueprint $table) {
            $table->dropForeign(['unidade_id']);
            $table->dropForeign(['bases_legale_id']);
            $table->dropForeign(['clasificacione_id']);
        });

        Schema::drop('servicios');
    }
}