<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasesLegalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bases_legales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_base', 100)->nullable();
            $table->string('nombre', 100)->nullable();
            $table->string('numero', 45)->nullable();
            $table->string('articulo', 100)->nullable();
            $table->string('notas', 100)->nullable();
            $table->string('doc_ubicacion', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bases_legales');
    }
}