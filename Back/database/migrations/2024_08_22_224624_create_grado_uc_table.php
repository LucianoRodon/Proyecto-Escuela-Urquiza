<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradoUcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grado_uc', function (Blueprint $table) {
            $table->integer('Id_Grado')->nullable();
            $table->integer('Id_UC')->nullable();
            
            $table->foreign('Id_UC', 'fk_grado_uc_uc')->references('Id_UC')->on('unidad_curricular')->onDelete('cascade');
            $table->foreign('Id_Grado', 'grado_uc_FK')->references('Id_Grado')->on('grado')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grado_uc');
    }
}
