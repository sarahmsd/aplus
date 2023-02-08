<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('ecoles')) {
            Schema::create('ecoles', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id');
                $table->string('ecole');
                $table->string('sigle');
                $table->foreignId('systemeEducatif_id');
                $table->string('etablissement');
                $table->string('email');
                $table->string('adresse');
                $table->string('telephone');
                $table->string('siteWeb');
                $table->string('linkedin');
                $table->longtext('description');
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
        // Schema::dropIfExists('ecoles');
    }
}
