<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEnseignementIdToEnsCyclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ens_cycles', function (Blueprint $table) {
            $table->foreignId('enseignement_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ens_cycles', function (Blueprint $table) {
            $table->dropColumn('enseignement_id');
        });
    }
}
