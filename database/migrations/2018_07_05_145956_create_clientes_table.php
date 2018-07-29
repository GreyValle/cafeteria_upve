<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',30);
            $table->string('apellidos',30);
            $table->string('direccion',100);
            $table->date('fecha_nac');
            $table->string('telefono',12)->nullable();
            $table->string('sexo',10);
            $table->integer('id_escolaridad');
            $table->integer('id_estatus_social');
            $table->integer('hijos')->nullable();
            $table->integer('id_ocupacion')->unsigned();
            $table->decimal('saldo',12,2)->unsigned();
            $table->boolean('estatus')->default(true);
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
        Schema::dropIfExists('clientes');
    }
}
