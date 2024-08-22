<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnoUcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_uc', function (Blueprint $table) {
            $table->integer('id_alumno')->nullable();
            $table->integer('id_uc')->nullable();
            
            $table->foreign('id_uc', 'alumno_uc_ibfk_1')->references('Id_UC')->on('unidad_curricular')->onDelete('cascade');
            $table->foreign('id_alumno', 'alumno_uc_ibfk_2')->references('Id_Alumno')->on('alumno')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumno_uc');
    }
}
