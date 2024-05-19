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
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_estudiante'); 
            $table->unsignedBigInteger('id_curso'); 
            $table->string('estado');
            $table->timestamps();

            $table->foreign('id_estudiante')
            ->reference('id')
            ->on('estudiantes');

            $table->foreign('id_curso')
            ->reference('id')
            ->on('cursos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscripciones');
    }
};
