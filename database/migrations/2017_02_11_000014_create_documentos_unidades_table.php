<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentosUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos_unidades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('unidade_id')->unsigned();
            $table->enum('tipo_documento', ['foto','organigrama','info'])->nullable();
            $table->string('ubicacion', 100)->nullable();
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
        Schema::table('documentos_unidades', function (Blueprint $table) {
            $table->dropForeign(['unidade_id']);
        });

        Schema::drop('documentos_unidades');
    }
}
