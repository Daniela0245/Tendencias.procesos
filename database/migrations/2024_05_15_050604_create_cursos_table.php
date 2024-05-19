<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->unsignedBigInteger('id_profesor'); // Cambiado a unsignedBigInteger para que coincida con el tipo de datos de la clave primaria en la tabla 'profesores'
            $table->string('ubicacion');
            $table->string('jornada');
            $table->timestamps();
    
            $table->foreign('id_profesor')
                ->references('id')
                ->on('profesores');
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
};
