<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionUcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion_uc', function (Blueprint $table) {
            $table->integer('Id_Inscripcion')->nullable();
            $table->integer('Id_UC')->nullable();
            
            $table->foreign('Id_Inscripcion', 'inscripcion_uc_ibfk_1')->references('Id_Inscripcion')->on('inscripcion')->onDelete('cascade');
            $table->foreign('Id_UC', 'inscripcion_uc_ibfk_2')->references('Id_UC')->on('unidad_curricular')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inscripcion_uc');
    }
}
