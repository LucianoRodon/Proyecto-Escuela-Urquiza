<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turno', function (Blueprint $table) {
            $table->integer('id_turno')->primary();
            $table->integer('id_f_evento')->nullable();
            $table->time('hora_turno')->nullable();
            
            $table->foreign('id_f_evento', 'turno_ibfk_1')->references('id_f_evento')->on('fecha_evento')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turno');
    }
}
