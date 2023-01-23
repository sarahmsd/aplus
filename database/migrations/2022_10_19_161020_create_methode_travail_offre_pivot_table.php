<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMethodeTravailOffrePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('methode_travail_offre', function (Blueprint $table) {
            $table->unsignedBigInteger('methode_travail_id')->index();
            $table->foreign('methode_travail_id')->references('id')->on('methode_travails')->onDelete('cascade');
            $table->unsignedBigInteger('offre_id')->index();
            $table->foreign('offre_id')->references('id')->on('offres')->onDelete('cascade');
            $table->primary(['methode_travail_id', 'offre_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('methode_travail_offre');
    }
}
