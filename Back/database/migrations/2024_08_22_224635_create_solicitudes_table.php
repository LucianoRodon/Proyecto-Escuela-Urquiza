<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->integer('id_solicitud')->primary();
            $table->integer('id_alumno')->nullable();
            $table->integer('id_categoria')->nullable();
            $table->string('mensaje', 300)->nullable();
            $table->integer('id_status')->nullable();
            $table->timestamp('fecha_creacion')->default('current_timestamp()');
            
            $table->foreign('id_alumno', 'solicitudes_ibfk_1')->references('Id_Alumno')->on('alumno');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudes');
    }
}
