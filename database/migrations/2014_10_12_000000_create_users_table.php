<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('telefono',12)->default("Desconocido");
            $table->unsignedInteger('escolaridad_id')->default(0);
            $table->unsignedInteger('estatus_social_id')->default(0);
            $table->unsignedInteger('ocupacion_id')->default(0);
            $table->unsignedInteger('tipo_sangre_id')->default(0);;
            $table->rememberToken();
 
            $table->timestamps();
            // $table->foreign('escolaridad_id')->references('id')->on('escolaridads');
            // $table->foreign('estatus_social_id')->references('id')->on('estatus_social');
            // $table->foreign('ocupacion_id')->references('id')->on('ocupacions');
            // $table->foreign('tipo_sangre_id')->references('id')->on('tipo_sangres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
