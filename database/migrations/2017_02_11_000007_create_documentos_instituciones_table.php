<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentosInstitucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos_instituciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('institucione_id')->unsigned();
            $table->enum('tipo_documento', ['foto','organigrama', 'info'])->nullable();
            $table->string('ubicacion', 300)->nullable();
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
        Schema::table('documentos_instituciones', function (Blueprint $table) {
            $table->dropForeign(['institucione_id']);
        });

        Schema::drop('documentos_instituciones');
    }
}