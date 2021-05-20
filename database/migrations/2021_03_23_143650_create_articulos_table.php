<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('n_serie');
            $table->bigInteger('inventario_id')->unsigned();
            $table->integer('cantidad');
            $table->string('estado');
            $table->string('tipo_documento');
            $table->string('n_documento');
            $table->string('n_orden');
            $table->string('proveedor');
            $table->string('precio');
            $table->string('file_path');
            $table->foreign('inventario_id')
                ->references('id')
                ->on('inventarios')
                ->onCascade('delete');
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
        Schema::dropIfExists('articulos');
    }
}
