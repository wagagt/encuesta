<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreasSpecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas_specs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('area_id')->unsigned();
            $table->string('nombre', 100)->nullable();
            $table->enum('evaluacion_criterio1', ['satisfactorio','deficiente'])->nullable();
            $table->enum('evaluacion_criterio2', ['1','2','3','4','5'])->nullable();
            $table->string('foto_ubicacion', 100)->nullable();
            $table->mediumText('notas')->nullable();
            $table->timestamps();

            $table->foreign('area_id')->references('id')->on('areas')->onDelete('no action')->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('areas_specs', function (Blueprint $table) {
            $table->dropForeign(['area_id']);
        });

        Schema::drop('areas_specs');
    }
}