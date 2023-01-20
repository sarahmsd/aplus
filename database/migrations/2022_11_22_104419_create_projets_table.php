<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('NomComplet');
            $table->string('email');
            $table->string('telephone');
            $table->string('nomStartup');
            $table->string('siteWeb')->nullable();
            $table->string('secteur_id');
            $table->string('debutProjet');
            $table->string('objectif');
            $table->string('connaitreA')->nullable();
            $table->string('motivation');
            $table->string('autreChoseAsavoir')->nullable();
            $table->string('demoProjet')->nullable();
            $table->string('collaborateurs')->nullable();
            $table->string('description');
            $table->string('demarcheProjet')->nullable();
            $table->string('date_expiration')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('projets');
    }
}
