<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion', function (Blueprint $table) {
            $table->integer('Id_Inscripcion')->primary();
            $table->dateTime('FechaHora')->nullable();
            $table->integer('Id_Alumno')->nullable();
            $table->integer('Id_Carrera')->nullable();
            $table->integer('Id_Grado')->nullable();
            
            $table->foreign('Id_Alumno', 'fk_inscripcion_alumno')->references('Id_Alumno')->on('alumno')->onDelete('cascade');
            $table->foreign('Id_Carrera', 'fk_inscripcion_carrera')->references('Id_Carrera')->on('carrera')->onDelete('cascade');
            $table->foreign('Id_Grado', 'fk_inscripcion_grado')->references('Id_Grado')->on('grado')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscripcion');
    }
}
