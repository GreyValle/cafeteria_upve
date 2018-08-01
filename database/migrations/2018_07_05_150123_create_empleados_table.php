<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
           
            $table->string('nombre',30);
            $table->string('apellidos',30);
            $table->string('direccion',100);
            $table->date('fecha_nac');
            $table->string('telefono',12)->nullable();
            $table->string('sexo',10);
            $table->integer('escolaridad_id');
            $table->integer('estatus_social_id');
            $table->integer('hijos')->nullable();

            $table->string('puesto',30)->nullable();
            $table->decimal('sueldo',12,2)->nullable();
            $table->string('nss',11);
            $table->integer('tipo_sangre_id')->nullable();
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
        Schema::dropIfExists('empleados');
    }
}
