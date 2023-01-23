<?php

namespace Database\Seeders;

use App\Models\MethodeTravail;
use Illuminate\Database\Seeder;

class MethodeTravailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Teletravail = new MethodeTravail;
        $Teletravail->nom = 'Teletravail';
        $Teletravail->save();

        $Presentiel = new MethodeTravail;
        $Presentiel->nom = 'Presentiel';
        $Presentiel->save();


    }
}
