<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContratModeOffrePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrat_mode_offre', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contrat_mode_id')->index();
            $table->foreign('contrat_mode_id')->references('id')->on('contrat_modes')->onDelete('cascade');
            $table->unsignedBigInteger('offre_id')->index();
            $table->foreign('offre_id')->references('id')->on('offres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contrat_mode_offre');
    }
}
