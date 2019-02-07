<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaqueteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquete', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',255)->nullable($value = true);
            $table->integer('duracion')->nullable($value = true);
            $table->integer('costo')->nullable($value = true);
            $table->integer('descuento');
            $table->string('estado');
            $table->unsignedInteger('id_persona_fk');

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
        Schema::dropIfExists('paquete');
    }
}
