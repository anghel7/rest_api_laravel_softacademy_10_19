<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_factura');
            $table->unsignedBigInteger('id_producto');
            $table->double("cantidad", 8, 2);
            $table->double("precio", 8, 2);
            $table->timestamps();
            $table->foreign('id_factura')
                ->references('id')->on('facturas')
                ->onDelete('cascade');
            $table->foreign('id_producto')
                ->references('id')->on('productos')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles');
    }
}
