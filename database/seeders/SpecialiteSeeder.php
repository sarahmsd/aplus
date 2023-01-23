<?php

namespace Database\Seeders;

use App\Models\Specialite;
use Illuminate\Database\Seeder;

class SpecialiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ArchitectureLogiciel = new Specialite;
        $ArchitectureLogiciel->nom = 'Architecture logiciel';
        $ArchitectureLogiciel->save();

        $Comptabilite = new Specialite;
        $Comptabilite->nom = 'Comptabilite';
        $Comptabilite->save();

        $Reseau = new Specialite;
        $Reseau->nom = 'Reseau';
        $Reseau->save();

        $Telecom = new Specialite;
        $Telecom->nom = 'Telecom';
        $Telecom->save();

        $Marketing = new Specialite;
        $Marketing->nom = 'Marketing';
        $Marketing->save();

        $Communication = new Specialite;
        $Communication->nom = 'Marketing';
        $Communication->save();

        $Pediatrie = new Specialite;
        $Pediatrie->nom = 'Pediatrie';
        $Pediatrie->save();

        $Gynecoligie = new Specialite;
        $Gynecoligie->nom = 'Gynecoligie';
        $Gynecoligie->save();

        $BanqueFin = new Specialite;
        $BanqueFin->nom = 'Banque Finance';
        $BanqueFin->save();

        $TransportLogistique = new Specialite;
        $TransportLogistique->nom = 'Transport Logistique';
        $TransportLogistique->save();



    }
}
