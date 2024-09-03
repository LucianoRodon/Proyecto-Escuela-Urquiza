<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarreraUcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrera_uc', function (Blueprint $table) {
            $table->integer('Id_Carrera')->nullable();
            $table->integer('Id_UC')->nullable();
            
            $table->foreign('Id_Carrera', 'fk_carrera_uc_carrera')->references('Id_Carrera')->on('carrera')->onDelete('cascade');
            $table->foreign('Id_UC', 'fk_carrera_uc_uc')->references('Id_UC')->on('unidad_curricular')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrera_uc');
    }
}
