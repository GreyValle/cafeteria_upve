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
            $table->unsignedDecimal('saldo',12,2)->default(0);
            $table->string('telefono',100)->default("Desconocido");
            $table->unsignedInteger('escolaridad_id')->index()->default(1);
            $table->unsignedInteger('estatus_social_id')->index()->default(1);
            $table->unsignedInteger('ocupacion_id')->index()->default(1);
            $table->unsignedInteger('tipo_sangre_id')->index()->default(1);
            $table->string('estatus')->default("Desactivado");
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
