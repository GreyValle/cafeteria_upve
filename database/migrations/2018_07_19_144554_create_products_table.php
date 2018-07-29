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
            $table->string('descripcion',200)->nullable();
            $table->string('ingredientes',200)->nullable();
            $table->decimal('precio',12,2)->default(0)->unsigned();
            $table->integer('id_empleado')->unsigned()->nullable();
            $table->boolean('estatus')->default(true);
            $table->string('imagen')->nullable();
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
        Schema::dropIfExists('products');
    }
}
