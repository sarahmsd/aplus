<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateEcolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('ecoles')) {
            Schema::table('ecoles', function (Blueprint $table) {
                $table->foreignId('systemeEducatif_id')->default(0)->change();
                $table->string('adresse')->nullable()->change();
                $table->string('telephone')->nullable()->change();
                $table->string('siteWeb')->nullable()->change();
                $table->string('linkedin')->nullable()->change();
                $table->longtext('description')->nullable()->change();
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
        Schema::table('ecoles', function (Blueprint $table) {
            //
        });
    }
}
