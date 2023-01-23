<?php

namespace Database\Seeders;

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
        $CDD = new ContratMode;
       $CDD->nom = 'CDD';
       $CDD->save();

       $CDI = new ContratMode;
       $CDI->nom = 'CDI';
       $CDI->save();

       $CTT = new ContratMode;
       $CTT->nom = 'CTT';
       $CTT->save();

        $Stage = new ContratMode;
        $Stage->nom = 'Stage';
        $Stage->save();

        $Freelance = new ContratMode;
        $Freelance->nom = 'Freelance';
        $Freelance->save();

    }
}
