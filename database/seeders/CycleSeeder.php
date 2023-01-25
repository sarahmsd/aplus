<?php

namespace Database\Seeders;

use App\Models\Cycle;
use Illuminate\Database\Seeder;

class CycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           // cycle pour le systeme francais

           $cycle = new Cycle();
           $cycle->cycle = 'Petite Section';
           $cycle->enseignement_id = 1;
           $cycle->save();
           $cycle = new Cycle();
           $cycle->cycle = 'Moyenne Section';
           $cycle->enseignement_id = 1;
           $cycle->save();
           $cycle = new Cycle();
           $cycle->cycle = 'Grande Section';
           $cycle->enseignement_id = 1;
           $cycle->save();

           //Elementaire
           $cycle = new Cycle();
           $cycle->cycle = 'CP';
           $cycle->enseignement_id = 2;
           $cycle->save();

           $cycle = new Cycle();
           $cycle->cycle = 'CE1';
           $cycle->enseignement_id = 2;
           $cycle->save();

           $cycle = new Cycle();
           $cycle->cycle = 'CE2';
           $cycle->enseignement_id = 2;
           $cycle->save();

           $cycle = new Cycle();
           $cycle->cycle = 'CM1';
           $cycle->enseignement_id = 2;
           $cycle->save();

           $cycle = new Cycle();
           $cycle->cycle = 'CM2';
           $cycle->enseignement_id = 2;
           $cycle->save();

           //secondaire

           $cycle = new Cycle();
           $cycle->cycle = '6° collège';
           $cycle->enseignement_id = 3;
           $cycle->save();

           $cycle = new Cycle();
           $cycle->cycle = '5° collège';
           $cycle->enseignement_id = 3;
           $cycle->save();
           $cycle = new Cycle();
           $cycle->cycle = '4° collège';
           $cycle->enseignement_id = 3;
           $cycle->save();
           $cycle = new Cycle();
           $cycle->cycle = '3° collège';
           $cycle->enseignement_id = 3;
           $cycle->save();
           $cycle = new Cycle();
           $cycle->cycle = '2nd Lycee';
           $cycle->enseignement_id = 3;
           $cycle->save();
           $cycle = new Cycle();
           $cycle->cycle = '1ere Lycee';
           $cycle->enseignement_id = 3;
           $cycle->save();
           $cycle = new Cycle();
           $cycle->cycle = 'terminal';
           $cycle->enseignement_id = 3;
           $cycle->save();

           //superieur

           $cycle = new Cycle();
           $cycle->cycle = 'Licence 1';
           $cycle->enseignement_id = 4;
           $cycle->save();
           $cycle = new Cycle();
           $cycle->cycle = 'Licence 2';
           $cycle->enseignement_id = 4;
           $cycle->save();
           $cycle = new Cycle();
           $cycle->cycle = 'Licence 3';
           $cycle->enseignement_id = 4;
           $cycle->save();
           $cycle = new Cycle();
           $cycle->cycle = 'Master 1';
           $cycle->enseignement_id = 4;
           $cycle->save();
           $cycle = new Cycle();
           $cycle->cycle = 'Master 2';
           $cycle->enseignement_id = 4;
           $cycle->save();
           $cycle = new Cycle();
           $cycle->cycle = 'Doctorat 2';
           $cycle->enseignement_id = 4;
           $cycle->save();
           $cycle = new Cycle();
           $cycle->cycle = 'Doctorat 3';
           $cycle->enseignement_id = 4;
           $cycle->save();
            // fin cycle francaise



            // us
            //Nursery School
            $cycle = new Cycle();
            $cycle->cycle = 'Pre School';
            $cycle->enseignement_id = 5;
            $cycle->save();
            $cycle = new Cycle();
            $cycle->cycle = 'Pre Kindergaten';
            $cycle->enseignement_id = 5;
            $cycle->save();
            $cycle = new Cycle();
            $cycle->cycle = 'Kindergaten';
            $cycle->enseignement_id = 5;
            $cycle->save();

            //primary school
            $cycle = new Cycle();
            $cycle->cycle = '1st Grade';
            $cycle->enseignement_id = 6;
            $cycle->save();
            $cycle = new Cycle();
            $cycle->cycle = '2nd Grade';
            $cycle->enseignement_id = 6;
            $cycle->save();
            $cycle = new Cycle();
            $cycle->cycle = '3rd Grade';
            $cycle->enseignement_id = 6;
            $cycle->save();
            $cycle = new Cycle();
            $cycle->cycle = '4th Grade';
            $cycle->enseignement_id = 6;
            $cycle->save();
            $cycle = new Cycle();
            $cycle->cycle = '5th Grade';
            $cycle->enseignement_id = 6;
            $cycle->save();

            // middle shool
            $cycle = new Cycle();
            $cycle->cycle = '6th grade';
            $cycle->enseignement_id = 7;
            $cycle->save();
            $cycle = new Cycle();
            $cycle->cycle = '7th grade';
            $cycle->enseignement_id = 7;
            $cycle->save();
            $cycle = new Cycle();
            $cycle->cycle = '8th grade';
            $cycle->enseignement_id = 7;
            $cycle->save();
            $cycle = new Cycle();
            $cycle->cycle = '9th grade';
            $cycle->enseignement_id = 7;
            $cycle->save();
            $cycle = new Cycle();
            $cycle->cycle = '10th grade';
            $cycle->enseignement_id = 7;
            $cycle->save();
            $cycle = new Cycle();
            $cycle->cycle = '11th grade';
            $cycle->enseignement_id = 7;
            $cycle->save();
            $cycle = new Cycle();
            $cycle->cycle = '12th grade';
            $cycle->enseignement_id = 7;
            $cycle->save();

            //Hight school
            $cycle = new Cycle();
            $cycle->cycle = 'Associate Degree';
            $cycle->enseignement_id = 8;
            $cycle->save();
            $cycle = new Cycle();
            $cycle->cycle = 'Bachelor Degree';
            $cycle->enseignement_id = 8;
            $cycle->save();
            $cycle = new Cycle();
            $cycle->cycle = 'Master Degree';
            $cycle->enseignement_id = 8;
            $cycle->save();
            $cycle = new Cycle();
            $cycle->cycle = 'PhD Degree';
            $cycle->enseignement_id = 8;
            $cycle->save();



            //uk
            //Nursery school
            $cycle = new Cycle();
            $cycle->cycle = 'Nursery School';
            $cycle->enseignement_id = 9;
            $cycle->save();

            //primary school
            $cycle = new Cycle();
            $cycle->cycle = 'Infant Shool';
            $cycle->enseignement_id = 10;
            $cycle->save();

            $cycle = new Cycle();
            $cycle->cycle = 'Junior Shool';
            $cycle->enseignement_id = 10;
            $cycle->save();

            //secondary
            $cycle = new Cycle();
            $cycle->cycle = 'Secondary';
            $cycle->enseignement_id = 11;
            $cycle->save();

            $cycle = new Cycle();
            $cycle->cycle = 'Sixth From college';
            $cycle->enseignement_id = 11;
            $cycle->save();

            //hight shool
            $cycle = new Cycle();
            $cycle->cycle = 'Associate Degree';
            $cycle->enseignement_id = 12;
            $cycle->save();

            $cycle = new Cycle();
            $cycle->cycle = 'Bachelor Degree';
            $cycle->enseignement_id = 12;
            $cycle->save();

            $cycle = new Cycle();
            $cycle->cycle = 'Master Degree';
            $cycle->enseignement_id = 12;
            $cycle->save();
            $cycle = new Cycle();
            $cycle->cycle = 'phD Degree';
            $cycle->enseignement_id = 12;
            $cycle->save();


    }
}
