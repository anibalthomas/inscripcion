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
            // datos personales
            $table->string('apellido_p');
            $table->string('apellido_m');
            $table->string('telefono');
            $table->string('edad');
            $table->string('pais');
            $table->string('nacionalidad');
            $table->string('estado');
            $table->string('municipio');
            $table->string('calle_num');
            $table->string('colonia');
            $table->string('cp');
            // datos particulares
            $table->string('ult_estudios');
            $table->string('institucion');
            $table->string('lug_trabajo');
            $table->string('puesto');
            // datos de emergencia
            $table->string('alergias_enfermedades');
            $table->string('tipo_sangre');
            $table->string('nombre_emergencia');
            $table->string('parentesco');
            $table->string('telefono_emergencia');

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
