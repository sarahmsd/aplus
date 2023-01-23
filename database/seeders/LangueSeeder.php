<?php

namespace Database\Seeders;

use App\Models\Langue;
use Illuminate\Database\Seeder;

class LangueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Français = new Langue;
       $Français->nom = 'Français';
       $Français->save();

       
    }
}
