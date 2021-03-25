<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleprestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleprestamos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('articulo_id')->unsigned();
            $table->bigInteger('prestamo_id')->unsigned();
            $table->integer('cantidad');
            $table->string('comentario',280);
            $table->foreign('articulo_id')
                ->references('id')
                ->on('articulos')
                ->onCascade('delete');
            $table->foreign('prestamo_id')
                ->references('id')
                ->on('prestamos')
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
        Schema::dropIfExists('detalleprestamos');
    }
}
