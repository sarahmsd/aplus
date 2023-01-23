<?php

namespace Database\Seeders;

use App\Models\Niveau;
use Illuminate\Database\Seeder;

class NiveauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Marternelle = new Niveau;
        $Marternelle->nom = 'Langue Marternelle';
        $Marternelle->save();

        $Courant = new Niveau;
        $Courant->nom = 'Courant';
        $Courant->save();


        $Satisfaisant = new Niveau;
        $Satisfaisant->nom = 'Satisfaisant';
        $Satisfaisant->save();

        $Moyen = new Niveau;
        $Moyen->nom = 'Moyen';
        $Moyen->save();

        $Base = new Niveau;
        $Base->nom = 'Notion de base';
        $Base->save();




    }
}
