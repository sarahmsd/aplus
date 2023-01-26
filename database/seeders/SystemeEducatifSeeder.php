<?php

namespace Database\Seeders;

use App\Models\systemeEducatif;
use Illuminate\Database\Seeder;

class SystemeEducatifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $SE = new systemeEducatif();
        $SE->Systeme_educatif = 'fr';
        $SE->save();
        $SE = new systemeEducatif();
        $SE->Systeme_educatif = 'us';
        $SE->save();
        $SE = new systemeEducatif();
        $SE->Systeme_educatif = 'uk';
        $SE->save();
    }
}
