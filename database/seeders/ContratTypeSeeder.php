<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use App\Models\ContratType;
use Illuminate\Database\Seeder;

class ContratTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contrat_types')->truncate();
        $CDD = new ContratType;
        $CDD->nom = 'CDD';
        $CDD->save();

        $CDI = new ContratType;
        $CDI->nom = 'CDI';
        $CDI->save();

        $CTT = new ContratType;
        $CTT->nom = 'CTT';
        $CTT->save();

        $Stage = new ContratType;
        $Stage->nom = 'Stage';
        $Stage->save();

        $Freelance = new ContratType;
        $Freelance->nom = 'Freelance';
        $Freelance->save();

        $Prestataire = new ContratType;
        $Prestataire->nom = 'Prestataire';
        $Prestataire->save();

    }
}
