<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactosInstitucionesTable extends Migration
{
    public function up()
    {
        Schema::create('contactos_instituciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('institucione_id')->unsigned();
            $table->string('nombre', 100)->nullable();
            $table->string('titulo_cargo', 100)->nullable();
            $table->string('email', 45)->nullable();
            $table->string('telefono_directo', 45)->nullable();
            $table->string('foto_ubicacion', 300)->nullable();
            $table->timestamps();

            $table->foreign('institucione_id')->references('id')->on('instituciones')->onDelete('no action')->onUpdate('no action');
        });
    }


    public function down()
    {
        Schema::table('contactos_instituciones', function (Blueprint $table) {
            $table->dropForeign(['institucione_id']);
        });

        Schema::drop('contactos_instituciones');
    }
}