<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEcoleIdToEnsCyclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ens_cycles', function (Blueprint $table) {
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
        Schema::table('ens_cycles', function (Blueprint $table) {
            $table->dropColumn('ecole_id');
        });
    }
}
