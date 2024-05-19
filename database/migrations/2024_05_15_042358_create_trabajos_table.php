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
        Schema::create('trabajos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_curso');
            $table->unsignedBigInteger('id_profesor');
            $table->string('nombre');
            $table->string('descripcion');
            $table->datetime('fecha_entrega');
            $table->string('porcentaje');
            $table->timestamps();

            $table->foreign('id_curso')
            ->references('id')
            ->on('cursos');

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
        Schema::dropIfExists('trabajos');
    }
};
