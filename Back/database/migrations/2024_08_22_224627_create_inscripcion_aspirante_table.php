<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionAspiranteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion_aspirante', function (Blueprint $table) {
            $table->integer('Id_inscripcion')->primary();
            $table->dateTime('FechaHora')->nullable();
            $table->integer('Id_Aspirante')->nullable();
            $table->integer('Id_Carrera')->nullable();
            $table->integer('Id_Grado')->nullable();
            
            $table->foreign('Id_Aspirante', 'fk_inscripcion_aspirante')->references('id_aspirante')->on('aspirante')->onDelete('cascade');
            $table->foreign('Id_Carrera', 'fk_inscripcion_carrera2')->references('Id_Carrera')->on('carrera')->onDelete('cascade');
            $table->foreign('Id_Grado', 'fk_inscripcion_grado2')->references('Id_Grado')->on('grado')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscripcion_aspirante');
    }
}
