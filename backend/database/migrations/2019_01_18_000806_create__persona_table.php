<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_un',255)->nullable($value=true);
            $table->string('nombre_dos',255)->nullable($value=true);
            $table->string('apellido_un',255)->nullable($value=true);
            $table->string('apellido_dos',255)->nullable($value=true);
            $table->string('estado');
            $table->string('cedula_identidad');
            $table->string('email');
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
        Schema::dropIfExists('persona');
    }
}
