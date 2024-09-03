<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table) {
            $table->integer('Id_Alumno')->primary();
            $table->integer('DNI')->nullable();
            $table->string('Nombre', 20)->nullable();
            $table->string('Apellido', 20)->nullable();
            $table->string('Email', 30)->nullable();
            $table->string('Telefono', 20)->nullable();
            $table->string('Genero', 10)->nullable();
            $table->date('Fecha_Nac')->nullable();
            $table->string('Nacionalidad', 20)->nullable();
            $table->string('Direccion', 30)->nullable();
            $table->integer('id_localidad')->nullable();
            
            $table->foreign('id_localidad', 'alumno_ibfk_1')->references('id_localidad')->on('localidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumno');
    }
}
