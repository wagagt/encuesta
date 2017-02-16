<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequisitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisitos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paso_id')->unsigned();
            $table->integer('tipo_requisito_id')->unsigned();
            $table->integer('forma_presentacione_id')->unsigned();
            $table->integer('base_legal_costo_id')->unsigned();
            $table->string('nombre', 100)->nullable();
            $table->enum('forma_presentacion', ['fisico','digital'])->nullable();
            $table->string('otra_forma_presentacion', 100)->nullable();
            $table->string('otro_tipo_requisito', 100)->nullable();
            $table->string('nombre_blc', 100)->nullable();
            $table->string('numero_blc', 100)->nullable();
            $table->string('articulo_blc', 100)->nullable();
            $table->string('otro_blc', 100)->nullable();
            $table->string('foto_blc_ubicacion', 100)->nullable();
            $table->timestamps();

            $table->foreign('paso_id')->references('id')->on('pasos')->onDelete('no action')->onUpdate('no action');
            $table->foreign('tipo_requisito_id')->references('id')->on('tipo_requisitos')->onDelete('no action')->onUpdate('no action');
            $table->foreign('forma_presentacione_id')->references('id')->on('forma_presentaciones')->onDelete('no action')->onUpdate('no action');
            $table->foreign('base_legal_costo_id')->references('id')->on('base_legal_costos')->onDelete('no action')->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('requisitos', function (Blueprint $table) {
            $table->dropForeign(['paso_id']);
            $table->dropForeign(['tipo_requisito_id']);
            $table->dropForeign(['forma_presentacione_id']);
            $table->dropForeign(['base_legal_costo_id']);
        });

        Schema::drop('requisitos');
    }
}
