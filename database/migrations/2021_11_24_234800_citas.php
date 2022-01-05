<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Citas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citas', function(Blueprint $table){
            $table->Id('Id_cita');
            $table->unsignedBigInteger('Id_cliente');
            $table->foreign('Id_cliente')->references('Id_usuario')->on('usuarios');
            $table->unsignedBigInteger('Id_abogado');
            $table->foreign('Id_abogado')->references('Id_usuario')->on('usuarios');
            $table->date('fecha');
            $table->text('descripcion');
            $table->string('estatus');
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
        Schema::dropIfExists('citas');
    }
}
