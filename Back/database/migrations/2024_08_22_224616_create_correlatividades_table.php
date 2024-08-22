<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorrelatividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correlatividades', function (Blueprint $table) {
            $table->integer('Id_Correlativa')->primary();
            $table->integer('Id_UC')->nullable();
            $table->integer('Correlativa')->nullable();
            $table->integer('Id_Carrera')->nullable();
            
            $table->foreign('Id_Carrera', 'fk_correlatividades_carrera')->references('Id_Carrera')->on('carrera')->onDelete('cascade');
            $table->foreign('Correlativa', 'fk_correlatividades_correlativa')->references('Id_UC')->on('unidad_curricular')->onDelete('cascade');
            $table->foreign('Id_UC', 'fk_correlatividades_uc')->references('Id_UC')->on('unidad_curricular')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('correlatividades');
    }
}
