<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUcPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uc_plan', function (Blueprint $table) {
            $table->integer('id_plan');
            $table->integer('id_uc');
            
            $table->primary(['id_plan', 'id_uc']);
            $table->foreign('id_plan', 'uc_plan_ibfk_1')->references('id_plan')->on('plan_estudio');
            $table->foreign('id_uc', 'uc_plan_ibfk_2')->references('Id_UC')->on('unidad_curricular');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uc_plan');
    }
}
