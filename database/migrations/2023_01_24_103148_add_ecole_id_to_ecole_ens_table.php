<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEcoleIdToEcoleEnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ecole_ens', function (Blueprint $table) {
            $table->foreignId('ecole_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ecole_ens', function (Blueprint $table) {
            $table->dropColumn('ecole_id');
        });
    }
}
