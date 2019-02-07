<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaquetePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquete_persona', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado');
            $table->unsignedInteger('id_paquete_fk');
            $table->unsignedInteger('id_persona_fk');

            $table->foreign('id_paquete_fk')->references('id')->on('paquete')->onDelete('cascade');
            $table->foreign('id_persona_fk')->references('id')->on('persona')->onDelete('cascade');;

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
        Schema::dropIfExists('paquete_persona');
    }
}
