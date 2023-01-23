<?php

namespace Database\Seeders;

use App\Models\Accreditation;
use Illuminate\Database\Seeder;

class AccreditationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $CAMES = new Accreditation();
        $CAMES->nomAcreditation	= 'CAMES';
        $CAMES->logo = 'cameslogo.png';
        $CAMES->save();

        $ANAQSUP = new Accreditation();
        $ANAQSUP->nomAcreditation	= 'ANAQ-Sup';
        $ANAQSUP->logo = 'anaqsuplogo.png';
        $ANAQSUP->save();
    }
}
