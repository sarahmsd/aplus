<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecrutementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recrutements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('candidature_id')->references('id')->on('candidatures')->onDelete('cascade');
            $table->foreignId('offre_id')->references('id')->on('offres')->onDelete('cascade');
            $table->string('note')->nullable();
            $table->string('dateDebut')->nullable();
            $table->string('dateFin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recrutements');
    }
}
