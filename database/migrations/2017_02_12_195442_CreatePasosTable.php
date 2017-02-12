<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 100)->nullable();
            $table->integer('procedimiento_id')->unsigned();
            $table->integer('base_legal_costos_id')->unsigned();
            $table->integer('tipos_presencia_id')->unsigned();
            $table->integer('tipo_paso_id')->unsigned();
            $table->float('costo')->nullable();
            $table->enum('existe_costo', ['si','no'])->nullable();
            $table->enum('pago_interno', ['si','no'])->nullable();
            $table->enum('es_agencia_banco', ['si','no'])->nullable();
            $table->string('no_agencia_especifique', 100)->nullable();
            $table->enum('base_legal_costo', ['si','no'])->nullable();
            $table->string('nombre_blc', 100)->nullable();
            $table->string('numero_blc', 100)->nullable();
            $table->string('articulo_blc', 100)->nullable();
            $table->string('otro_blc', 100)->nullable();
            $table->enum('requiere_presencia', ['si','no'])->nullable();
            $table->string('foto_blc_ubicacion', 100)->nullable();
            $table->string('tipo_resultado_especifique', 100)->nullable();
            $table->string('otro_tipo_paso', 100)->nullable();
            $table->string('otro_metodo_pago', 100)->nullable();
            $table->string('otro_tipo_resultado', 100)->nullable();
            $table->string('otro_lugar_pago', 100)->nullable();
            $table->string('otro_base_legal_costo', 100)->nullable();
            $table->timestamps();

            $table->foreign('procedimiento_id')->references('id')->on('procedimientos')->onDelete('no action')->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pasos', function (Blueprint $table) {
            $table->dropForeign(['procedimiento_id']);
        });

        Schema::drop('pasos');
    }
}
