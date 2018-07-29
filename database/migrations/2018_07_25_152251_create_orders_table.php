<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cliente');
            $table->integer('id_producto');
            $table->decimal('total',12,2);
            // $table->timestamps('fecha_solicitud')->nullable();
            $table->date('fecha_entregar');
            // $table->times('hora_entregar');
            // $table->timestamps('fecha_entregada')->nullable();
            $table->integer('id_estatus')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
