<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDomaineOffrePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domaine_offre', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('domaine_id')->index();
            $table->foreign('domaine_id')->references('id')->on('domaines')->onDelete('cascade');
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
        Schema::dropIfExists('domaine_offre');
    }
}
