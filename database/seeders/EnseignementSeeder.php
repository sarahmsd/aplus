<?php

namespace Database\Seeders;

use App\Models\Enseignement;
use Illuminate\Database\Seeder;

class EnseignementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // enseignement francais

        $enseignement = new Enseignement();
        $enseignement->enseignement = 'Pre-élementaire';
        $enseignement->systemeEducatif_id = 1;
        $enseignement->save();
        
        $enseignement = new Enseignement();
        $enseignement->enseignement = 'Elementaire';
        $enseignement->systemeEducatif_id = 1;
        $enseignement->save();

        $enseignement = new Enseignement();
        $enseignement->enseignement = 'Secondaire';
        $enseignement->systemeEducatif_id = 1;
        $enseignement->save();

        $enseignement = new Enseignement();
        $enseignement->enseignement = 'Superieur';
        $enseignement->systemeEducatif_id = 1;
        $enseignement->save();

        // enseignement US
        $enseignement = new Enseignement();
        $enseignement->enseignement = 'Nursery school';
        $enseignement->systemeEducatif_id = 3;
        $enseignement->save();
        $enseignement = new Enseignement();
        $enseignement->enseignement = 'Primary school';
        $enseignement->systemeEducatif_id = 3;
        $enseignement->save();
        $enseignement = new Enseignement();
        $enseignement->enseignement = 'Secondary School';
        $enseignement->systemeEducatif_id = 3;
        $enseignement->save();
        $enseignement = new Enseignement();
        $enseignement->enseignement = 'Hight school';
        $enseignement->systemeEducatif_id = 3;
        $enseignement->save();


        // enseignement UK
        $enseignement->enseignement = 'Nursery school';
        $enseignement->systemeEducatif_id = 2;
        $enseignement->save();
        $enseignement = new Enseignement();
        $enseignement->enseignement = 'Primary school';
        $enseignement->systemeEducatif_id = 2;
        $enseignement->save();
        $enseignement = new Enseignement();
        $enseignement->enseignement = 'Secondary School';
        $enseignement->systemeEducatif_id = 2;
        $enseignement->save();
        $enseignement = new Enseignement();
        $enseignement->enseignement = 'Hight school';
        $enseignement->systemeEducatif_id = 2;
        $enseignement->save();



    }
}
