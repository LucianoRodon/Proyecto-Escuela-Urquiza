<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->integer('Id_Nota')->primary();
            $table->integer('Id_UC')->nullable();
            $table->integer('Id_Alumno')->nullable();
            $table->integer('Id_Carrera')->nullable();
            $table->float('Nota')->nullable();
            
            $table->foreign('Id_Alumno', 'fk_notas_alumno')->references('Id_Alumno')->on('alumno')->onDelete('cascade');
            $table->foreign('Id_Carrera', 'fk_notas_carrera')->references('Id_Carrera')->on('carrera')->onDelete('cascade');
            $table->foreign('Id_UC', 'fk_notas_uc')->references('Id_UC')->on('unidad_curricular')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notas');
    }
}
