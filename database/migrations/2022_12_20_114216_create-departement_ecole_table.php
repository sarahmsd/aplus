<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartementEcoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('departement_ecole')) {
            Schema::create('departement_ecole', function (Blueprint $table) {
                $table->id();
                $table->foreignId('ecole_id')->references('id')->on('ecoles');
                $table->foreignId('departement_id')->references('id')->on('departements');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departement_ecole');
    }
}
