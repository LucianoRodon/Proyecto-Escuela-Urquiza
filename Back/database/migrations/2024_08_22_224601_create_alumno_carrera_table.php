<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnoCarreraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_carrera', function (Blueprint $table) {
            $table->integer('Id_Alumno')->nullable();
            $table->integer('Id_Carrera')->nullable();
            
            $table->foreign('Id_Alumno', 'fk_alumno_carrera_alumno')->references('Id_Alumno')->on('alumno')->onDelete('cascade');
            $table->foreign('Id_Carrera', 'fk_alumno_carrera_carrera')->references('Id_Carrera')->on('carrera')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumno_carrera');
    }
}
