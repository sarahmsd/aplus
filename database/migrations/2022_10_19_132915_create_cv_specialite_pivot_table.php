<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCvSpecialitePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_specialite', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cv_id')->index();
            $table->foreign('cv_id')->references('id')->on('cvs')->onDelete('cascade');
            $table->unsignedBigInteger('specialite_id')->index();
            $table->foreign('specialite_id')->references('id')->on('specialites')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cv_specialite');
    }
}
