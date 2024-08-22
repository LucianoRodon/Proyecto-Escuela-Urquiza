<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnoGradoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_grado', function (Blueprint $table) {
            $table->integer('Id_Alumno')->nullable();
            $table->integer('Id_Grado')->nullable();
            
            $table->foreign('Id_Alumno', 'fk_alumno_grado_alumno')->references('Id_Alumno')->on('alumno')->onDelete('cascade');
            $table->foreign('Id_Grado', 'fk_alumno_grado_grado')->references('Id_Grado')->on('grado')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumno_grado');
    }
}
