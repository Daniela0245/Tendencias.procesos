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
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_inscripcion');
            $table->unsignedBigInteger('id_entrega');
            $table->string('nota');
            $table->string('observacion');
            $table->timestamps();

            $table->foreign('id_inscripcion')
            ->references('id')
            ->on('inscripciones');

            $table->foreign('id_entrega')
            ->references('id')
            ->on('entregas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calificaciones');
    }
};
