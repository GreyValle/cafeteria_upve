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
            $table->decimal('total',12,2);
            // $table->timestamps('fecha_solicitud')->nullable();
            $table->date('fecha_entregar')->nullable();
            // $table->times('hora_entregar');
            // $table->timestamps('fecha_entregada')->nullable();
            $table->unsignedInteger('orden_estatus_id')->index();
            $table->unsignedInteger('product_id');
            $table->unsignedInteger('user_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            // $table->foreign('orden__estatuses_id')->references('id')->on('orden__estatuses')->onDelete('cascade');
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
