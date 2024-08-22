<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionExamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion_examen', function (Blueprint $table) {
            $table->integer('id_inscripcion')->primary();
            $table->dateTime('fechaHora')->nullable();
            $table->integer('id_alumno')->nullable();
            $table->integer('id_examen')->nullable();
            
            $table->foreign('id_alumno', 'inscripcion_examen_ibfk_1')->references('Id_Alumno')->on('alumno')->onDelete('cascade');
            $table->foreign('id_examen', 'inscripcion_examen_ibfk_2')->references('id_examen')->on('examenes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscripcion_examen');
    }
}
