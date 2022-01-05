<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AbogadoEspecialidad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abogadoespecialidad', function(Blueprint $table){
            $table->unsignedBigInteger('Id_abogado');
            $table->foreign('Id_abogado')->references('Id_usuario')->on('usuarios');
            $table->unsignedBigInteger('Id_especialidad');
            $table->foreign('Id_especialidad')->references('Id_especialidad')->on('especialidades');
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
        //
    }
}
