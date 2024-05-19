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
        Schema::create('entregas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_trabajo');
            $table->unsignedBigInteger('id_estudiante');
            $table->datetime('fecha_entrega');
            $table->string('archivo');
            $table->timestamps();

            $table->foreign('id_trabajo')
            ->references('id')
            ->on('trabajos');

            $table->foreign('id_estudiante')
            ->references('id')
            ->on('estudiantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entregas');
    }
};
