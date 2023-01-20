<?php

namespace Database\Seeders;

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
       $TempPlein = new ContratType;
       $TempPlein->nom = 'Temps plein';
       $TempPlein->save();

       $TempsPartiel = new ContratType;
       $TempsPartiel->nom = 'Temps partiel';
       $TempsPartiel->save();

       $Stage = new ContratType;
       $Stage->nom = 'Stage';
       $Stage->save();

       $Prestataire = new ContratType;
       $Prestataire->nom = 'Prestataire';
       $Prestataire->save();

    }
}
