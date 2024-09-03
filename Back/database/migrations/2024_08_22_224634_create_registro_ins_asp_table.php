<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroInsAspTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_ins_asp', function (Blueprint $table) {
            $table->integer('id_registro')->primary();
            $table->integer('id_aspirante')->nullable();
            $table->integer('id_documento')->nullable();
            $table->integer('id_turno')->nullable();
            
            $table->foreign('id_aspirante', 'registro_ins_asp_ibfk_1')->references('id_aspirante')->on('aspirante')->onDelete('cascade');
            $table->foreign('id_documento', 'registro_ins_asp_ibfk_2')->references('id_documento')->on('documentacion')->onDelete('cascade');
            $table->foreign('id_turno', 'registro_ins_asp_ibfk_3')->references('id_turno')->on('turno')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_ins_asp');
    }
}
