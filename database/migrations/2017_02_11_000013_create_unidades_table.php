<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('institucione_id')->unsigned();
            $table->string('nombre', 100)->nullable();
            $table->string('direccion', 100)->nullable();
            $table->string('telefonos', 45)->nullable();
            $table->integer('personas_cantidad')->nullable();
            $table->integer('puestos_cantidad')->nullable();
            $table->string('foto_ubicacion', 100)->nullable();
            $table->string('foto_personas_ubicacion', 100)->nullable();
            $table->mediumText('notas')->nullable();
            $table->timestamps();

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
        Schema::table('unidades', function (Blueprint $table) {
            $table->dropForeign(['institucione_id']);
        });

        Schema::drop('unidades');
    }
}
