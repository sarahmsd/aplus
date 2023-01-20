<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLieuOffrePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lieu_offre', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lieu_id')->index();
            $table->foreign('lieu_id')->references('id')->on('lieus')->onDelete('cascade');
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
        Schema::dropIfExists('lieu_offre');
    }
}
