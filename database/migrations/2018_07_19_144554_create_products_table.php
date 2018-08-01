<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',150)->unique();
            $table->string('descripcion',200)->default("Sin descripcion")->nullable();
            $table->string('ingredientes',200)->default("Sin ingredientes")->nullable();
            $table->decimal('precio',12,2)->default(0)->unsigned();
            $table->boolean('estatus')->default(true);
            $table->string('imagen')->default("sin_imagen.png")->nullable();
            $table->unsignedInteger('user_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
