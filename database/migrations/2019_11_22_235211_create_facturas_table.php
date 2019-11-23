<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("id_cliente");
            $table->unsignedBigInteger("id_modo_pago");
            $table->date("fecha");
            $table->timestamps();
            /** */
            $table->foreign("id_cliente")
            ->references("id")->on("clientes")
            ->onDelete('cascade');
            $table->foreign("id_modo_pago")
            ->references("id")->on("modo_pagos")
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
        Schema::dropIfExists('facturas');
    }
}
