<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCvLanguePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_langue', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cv_id')->index();
            $table->foreign('cv_id')->references('id')->on('cvs')->onDelete('cascade');
            $table->unsignedBigInteger('langue_id')->index();
            $table->foreign('langue_id')->references('id')->on('langues')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cv_langue');
    }
}
