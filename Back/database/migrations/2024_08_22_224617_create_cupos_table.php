<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cupos', function (Blueprint $table) {
            $table->integer('Id_Cupos')->primary();
            $table->integer('Id_Carrera')->nullable();
            $table->year('Ano_Lectivo', 4)->nullable();
            $table->integer('Cupos_Disp')->default(0);
            
            $table->foreign('Id_Carrera', 'fk_cupos_carrera')->references('Id_Carrera')->on('carrera')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cupos');
    }
}
