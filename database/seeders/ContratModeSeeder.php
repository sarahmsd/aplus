<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use App\Models\ContratMode;
use Illuminate\Database\Seeder;

class ContratModeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contrat_modes')->truncate();
        $TempPlein = new ContratMode;
       $TempPlein->nom = 'Temps plein';
       $TempPlein->save();

       $TempsPartiel = new ContratMode;
       $TempsPartiel->nom = 'Temps partiel';
       $TempsPartiel->save();

    }
}
